@extends('layouts.template')

@section('content')
<div class="container mt-5">
    <h2 class="text-center">Tableau de Bord</h2>

    <div class="row mt-4">
        <!-- Carte 1: Apprenants -->
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">Nombre d'Apprenants</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $apprenantsCount }}</h5>
                    <p class="card-text">Le nombre total d'apprenants inscrits.</p>
                    <a href="{{ route('apprenants.index') }}" class="btn btn-light">Voir les Apprenants</a>
                </div>
            </div>
        </div>

        <!-- Carte 2: Formateurs -->
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-header">Nombre de Formateurs</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $formateursCount }}</h5>
                    <p class="card-text">Le nombre total de formateurs inscrits.</p>
                    <a href="{{ route('formateurs.index') }}" class="btn btn-light">Voir les Formateurs</a>
                </div>
            </div>
        </div>

        <!-- Carte 3: Formations -->
        <div class="col-md-4">
            <div class="card text-white bg-warning mb-3">
                <div class="card-header">Nombre de Formations</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $formationsCount }}</h5>
                    <p class="card-text">Le nombre total de formations disponibles.</p>
                    <a href="{{ route('formations.index') }}" class="btn btn-light">Voir les Formations</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
