<?php

use App\Http\Controllers\ProfileController ;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\FormateurController;
use App\Http\Controllers\ApprenantController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Formateurs\CompteController ;
//menu
Route::get('/Apropos', function () {
    return view('layouts.menu.Apropos');
})->name('Apropos');
Route::get('/Cours', function () {
    return view('layouts.menu.Cours');
})->name('Cours');

Route::get('/s', [FormationController::class, 'index'])->name('a.F.index');
// pour le formateurs:
    Route::controller(CompteController::class)
        ->middleware(['auth', 'is_formateur'])
        ->prefix('formateur/compte')
        ->name('formateur.compte.')
        ->group(function () {
            Route::get('/', 'show')->name('show');
            Route::get('/edit', 'edit')->name('edit');
            Route::post('/update', 'update')->name('update');
        });




//pour CRUD formation
Route::resource('admin/formations', FormationController::class);
Route::resource('admin/formateurs', FormateurController::class);
Route::resource('admin/apprenants', ApprenantController::class);


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


//par defaut
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
