<?php
namespace App\Http\Controllers;

use App\Models\Course; // Assure-toi que ton modèle Course est bien importé

class AdminController extends Controller
{
    public function index()
    {
        // Récupère tous les cours avec leur nombre de vidéos
        $cours = Course::withCount('videos')->get();  // `videos` doit être une relation définie dans ton modèle Course
        return view('admin.index', compact('cours'));  // Retourne la vue avec les données
    }
}
