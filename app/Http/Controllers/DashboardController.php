<?php
namespace App\Http\Controllers;

use App\Models\Apprenant;
use App\Models\Formateur;
use App\Models\Formation;

class DashboardController extends Controller
{
    public function index()
    {
        $apprenantsCount = Apprenant::count();
        $formateursCount = Formateur::count();
        $formationsCount = Formation::count();


        return view('admin.dashboard', compact('apprenantsCount', 'formateursCount', 'formationsCount'));
    }
}
