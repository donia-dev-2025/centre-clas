<?php

namespace App\Http\Controllers\Formateurs;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    // Afficher le formulaire de création du cours
    public function create()
    {
        // Passer le formateur actuel pour lier à la création
        return view('formateurs.courses.create');
    }

    // Méthode pour enregistrer un cours
    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        // Création du cours avec l'ID du formateur connecté
        Course::create([
            'title' => $request->title,
            'description' => $request->description,
            'formateur_id' => auth()->id(), // ID du formateur connecté
        ]);

        // Redirection avec message de succès
        return redirect()->route('formateurs.courses.index')->with('success', 'Cours ajouté avec succès !');
    }

    // Méthode pour afficher la liste des cours
    public function index()
{
    $formateur = auth()->user();
    dd( $formateur);
    $courses = $formateur->courses ? collect($formateur->courses) : collect();
    return view('formateurs.courses.index', compact('courses', 'formateur'));
}

    // Afficher les détails d'un cours spécifique
    public function show($id)
    {
        // Récupérer la formation avec l'ID donné
        $course = Course::findOrFail($id);

        // S'assurer que le formateur connecté est bien celui qui possède le cours
        if ($course->formateur_id !== auth()->id()) {
            return redirect()->route('formateurs.courses.index')->with('error', 'Vous n\'avez pas accès à ce cours.');
        }

        // Retourner la vue avec les détails du cours
        return view('formateurs.courses.show', compact('course'));
    }
}
