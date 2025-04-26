<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController ;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\FormateurController;
use App\Http\Controllers\ApprenantController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Formateurs\CompteController ;
use App\Http\Controllers\Formateurs\CourseController;
use App\Http\Controllers\Formateurs\VideoController;
use App\Http\Controllers\Formateurs\ChapitreController;


//menu
Route::get('/Apropos', function () {
    return view('layouts.menu.Apropos');
})->name('Apropos');
Route::get('/Cours', function () {
    return view('layouts.menu.Cours');
})->name('Cours');
Route::get('/Actualités', function () {
    return view('layouts.menu.Actualités');
})->name('Actualités');





// Route pour afficher les statistiques
Route::middleware(['auth', 'role:admin'])->group(function () {
Route::get('/admin/statistiques', [AdminController::class, 'showStatistics'])->name('admin.statistiques');
});


Route::get('/s', [FormationController::class, 'index'])->name('a.F.index');

//pour formateur//
    Route::middleware(['auth', 'role:formateur'])->group(function () {

    //hathem ne9sin controller homa chnya fonctional   compte mta3 for
    Route::resource('formateurs.courses', CourseController::class);
    Route::resource('formateurs.courses.chapitres', ChapitreController::class);
    // Affichage formulaire d'ajout vidéo
    Route::get('/videos/create', [VideoController::class, 'create'])->name('videos.create');
    Route::get('/test', [CompteController::class, 'index'])->name('formateur.dashboard');
//ici tu let dashboard hathi l deja ne5dem fiha 
    // Enregistrement vidéo (post)
    Route::post('/videos', [VideoController::class, 'store'])->name('videos.store');


});

//pour CRUD formation
Route::middleware(['auth', 'role:admin'])->group(function () {
Route::resource('admin/formations', FormationController::class);
Route::resource('admin/formateurs', FormateurController::class);
Route::resource('admin/apprenants', ApprenantController::class);
});
//Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
//Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');



//par defaut
Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
