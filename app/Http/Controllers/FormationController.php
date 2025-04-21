<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $F=Formation::all();
        return view('Admin.Formation.index')->with('formations',$F);

    }

    /**
     * Show the form for creating a new resour
     */
    public function create()
    {
        return view('Admin.Formation.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:255|unique:formations,titre',
            'description' => 'required|string|min:10',
            'duree' => 'required|integer|min:1|max:52',
            'type' => 'required|in:presentiel,en ligne,bibliotheque',
            'prix' => 'nullable|numeric|min:0',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'formateur_id' => 'required|exists:formateurs,id',

        ]);

        Formation::create($validated);

        return redirect()->route('formations.index')->with('success', 'Formation ajoutée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Formation $formation)
    {
        return view('admin.formations.show', compact('formation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Formation $formation)
    {
        return view('admin.formations.edit', compact('formation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Formation $formation)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:255|unique:formations,titre,' . $formation->id,
            'description' => 'required|string|min:10',
            'duree' => 'required|integer|min:1|max:52',
            'type' => 'required|in:presentiel,en ligne,bibliotheque',
            'prix' => 'nullable|numeric|min:0',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'formateur_id' => 'required|exists:formateurs,id',
        ]);

        $formation->update($validated);

        return redirect()->route('formations.index')->with('success', 'Formation modifiée avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Formation $formation)
    {
        $formation->delete();

        return redirect()->route('formations.index')->with('success', 'Formation supprimée avec succès.');
    }
}
