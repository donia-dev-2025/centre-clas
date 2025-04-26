<?php
namespace App\Http\Controllers\Formateurs;

use App\Models\Course;
use App\Models\Chapitre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChapitreController extends Controller
{
    // Afficher le formulaire pour créer un chapitre
    public function create($courseId)
    {
        $course = Course::findOrFail($courseId); // Trouver la formation avec l'ID
        return view('formateurs.chapitres.create', compact('course'));
    }

    // Méthode pour enregistrer un chapitre
    public function store(Request $request, $courseId)
    {
        // Validation des données
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'video' => 'nullable|mimes:mp4,mov,avi|max:10240',
            'pdf' => 'nullable|mimes:pdf|max:10240',
        ]);

        // Trouver la formation
        $course = Course::findOrFail($courseId);

        // Créer le chapitre
        $chapitre = new Chapitre();
        $chapitre->title = $request->title;
        $chapitre->description = $request->description;
        $chapitre->course_id = $course->id;

        // Gérer l'upload de vidéo et de PDF si présents
        if ($request->hasFile('video')) {
            $chapitre->video_path = $request->file('video')->store('videos', 'public');
        }

        if ($request->hasFile('pdf')) {
            $chapitre->pdf_path = $request->file('pdf')->store('pdfs', 'public');
        }

        // Sauvegarder le chapitre
        $chapitre->save();

        // Retourner à la page du cours avec message de succès
        return redirect()->route('formateurs.courses.show', $course->id)
                         ->with('success', 'Chapitre ajouté avec succès !');
    }

    // Méthode pour afficher le formulaire d'édition d'un chapitre
    public function edit($id)
    {
        $chapitre = Chapitre::findOrFail($id);
        return view('formateurs.chapitres.edit', compact('chapitre'));
    }

    // Méthode pour mettre à jour un chapitre
    public function update(Request $request, $id)
    {
        $chapitre = Chapitre::findOrFail($id);

        // Validation des données
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'video' => 'nullable|mimes:mp4,mov,avi|max:10240',
            'pdf' => 'nullable|mimes:pdf|max:10240',
        ]);

        // Mettre à jour les informations
        $chapitre->title = $request->title;
        $chapitre->description = $request->description;

        // Gérer l'upload de vidéo et de PDF si présents
        if ($request->hasFile('video')) {
            $chapitre->video_path = $request->file('video')->store('videos', 'public');
        }

        if ($request->hasFile('pdf')) {
            $chapitre->pdf_path = $request->file('pdf')->store('pdfs', 'public');
        }

        // Sauvegarder les changements
        $chapitre->save();

        // Retourner avec message de succès
        return redirect()->route('formateurs.courses.show', $chapitre->course_id)
                         ->with('success', 'Chapitre modifié avec succès !');
    }

    // Méthode pour supprimer un chapitre
    public function destroy($id)
    {
        $chapitre = Chapitre::findOrFail($id);
        $chapitre->delete();

        // Retourner à la page du cours
        return redirect()->route('formateurs.courses.show', $chapitre->course_id)
                         ->with('success', 'Chapitre supprimé avec succès !');
    }
}
