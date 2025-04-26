<?php

namespace App\Http\Controllers\Formateurs;

use App\Models\Course;
use App\Models\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VideoController extends Controller
{
    public function store(Request $request)
    {
        // Validation de la requête (facultatif, mais recommandé)
        $request->validate([
            'title' => 'required|string|max:255',
            'video_path' => 'required|file|mimes:mp4,avi,mov|max:10000', // Limiter la taille et les types de fichier
            'course_id' => 'required|exists:courses,id', // Vérifie que le course_id existe
        ]);

        // Stocker la vidéo dans le répertoire 'videos' dans le disque 'public'
        $path = $request->file('video_path')->store('videos', 'public');

        // Créer une nouvelle vidéo associée au cours
        Video::create([
            'title' => $request->title,
            'video_path' => $path,
            'course_id' => $request->course_id,
        ]);

        // Rediriger avec un message de succès
        return redirect()->back()->with('success', 'Vidéo ajoutée !');
    }

    public function create()
    {
        // Njibou tous les cours bach l'utilisateur ykhdem vidéo m3a cours m3ayen
        $courses = Course::all();

        // Nb3thou les cours lel vue create.blade.php
        return view('formateurs.videos.create', compact('courses'));
    }


}
