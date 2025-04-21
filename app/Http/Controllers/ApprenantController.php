<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;
use Illuminate\Http\Request;

class ApprenantController extends Controller

{
    // Affiche tous les apprenants
    public function index()
    {
        $apprenants = Apprenant::all();
        return view('admin.apprenants.index', compact('apprenants'));
    }

    // Affiche le formulaire de création d'un nouvel apprenant
    public function create()
    {
        return view('admin.apprenants.create');
    }

    // Enregistre un nouvel apprenant
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email|unique:apprenants',
            'niveau' => 'required|string',
            // Ajoute d'autres validations selon les besoins
        ]);

        Apprenant::create($request->all());

        return redirect()->route('apprenants.index')->with('success', 'Apprenant ajouté avec succès');
    }

    // Affiche les détails d'un apprenant spécifique
    public function show(Apprenant $apprenant)
    {
        return view('admin.apprenants.show', compact('apprenant'));
    }

    // Affiche le formulaire d'édition d'un apprenant
    public function edit(Apprenant $apprenant)
    {
        return view('admin.apprenants.edit', compact('apprenant'));
    }

    // Met à jour les informations d'un apprenant
    public function update(Request $request, Apprenant $apprenant)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email|unique:apprenants,email,' . $apprenant->id,
            'niveau' => 'required|string',
            // Ajoute d'autres validations selon les besoins
        ]);

        $apprenant->update($request->all());

        return redirect()->route('apprenants.index')->with('success', 'Apprenant mis à jour avec succès');
    }

    // Supprime un apprenant
    public function destroy(Apprenant $apprenant)
    {
        $apprenant->delete();

        return redirect()->route('apprenants.index')->with('success', 'Apprenant supprimé avec succès');
    }
}
