<?php

namespace App\Http\Controllers\Formateurs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompteController extends Controller
{
    public function show()
    {
        $formateur = Auth::user();
        return view('formateur.compte.show', compact('formateur'));
    }

    public function edit()
    {
        $formateur = Auth::user();
        return view('formateur.compte.edit', compact('formateur'));
    }

    public function update(Request $request)
    {
        $formateur = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $formateur->id,
            'telephone' => 'nullable|string|max:20',
        ]);

        $formateur->update([
            'name' => $request->name,
            'email' => $request->email,
            'telephone' => $request->telephone,
        ]);

        return redirect()->route('formateur.compte.show')->with('success', 'Profil mis à jour avec succès.');
    }
}
