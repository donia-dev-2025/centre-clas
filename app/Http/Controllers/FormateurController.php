<?php

namespace App\Http\Controllers;

use App\Models\Formateur;
use Illuminate\Http\Request;

class FormateurController extends Controller
{
    // Afficher la liste des formateurs
    public function index()
    {
        $formateurs = Formateur::all();
        return view('admin.formateurs.index', compact('formateurs'));
    }

    // Afficher le formulaire de création d'un formateur
    public function create()
    {
        return view('admin.formateurs.create');
    }

    // Sauvegarder le formateur dans la base de données
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'specialite' => 'required',
            'biographie' => 'required',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
        }

        Formateur::create([
            'nom' => $request->nom,
            'specialite' => $request->specialite,
            'biographie' => $request->biographie,
            'photo' => $photoPath,
        ]);

        return redirect()->route('formateurs.index')->with('success', 'Formateur ajouté avec succès');
    }

    // Afficher les détails du formateur
    public function show(Formateur $formateur)
    {
        return view('admin.formateurs.show', compact('formateur'));
    }

    // Afficher le formulaire de modification du formateur
    public function edit(Formateur $formateur)
    {
        return view('admin.formateurs.edit', compact('formateur'));
    }

    // Mettre à jour le formateur
    public function update(Request $request, Formateur $formateur)
    {
        $request->validate([
            'nom' => 'required',
            'specialite' => 'required',
            'biographie' => 'required',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $photoPath = $formateur->photo;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
        }

        $formateur->update([
            'nom' => $request->nom,
            'specialite' => $request->specialite,
            'biographie' => $request->biographie,
            'photo' => $photoPath,
        ]);

        return redirect()->route('formateurs.index')->with('success', 'Formateur mis à jour avec succès');
    }

    // Supprimer un formateur
    public function destroy(Formateur $formateur)
    {
        $formateur->delete();
        return redirect()->route('formateurs.index')->with('success', 'Formateur supprimé avec succès');
    }
}
