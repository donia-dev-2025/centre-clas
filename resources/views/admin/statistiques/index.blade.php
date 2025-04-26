@extends('layouts.template')

@section('content')
<div class="container">
    <h1 class="my-4">Tableau de Bord - Statistiques</h1>

    <div class="row">
        <!-- Statistiques des Formateurs -->
        <div class="col-md-3">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">Formateurs</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $formateursCount }}</h5>
                    <p class="card-text">Nombre total de formateurs inscrits.</p>
                </div>
            </div>
        </div>

        <!-- Statistiques des Apprenants -->
        <div class="col-md-3">
            <div class="card text-white bg-success mb-3">
                <div class="card-header">Apprenants</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $apprenantsCount }}</h5>
                    <p class="card-text">Nombre total d'apprenants inscrits.</p>
                </div>
            </div>
        </div>

        <!-- Statistiques des Formations -->
        <div class="col-md-3">
            <div class="card text-white bg-warning mb-3">
                <div class="card-header">Formations</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $formationsCount }}</h5>
                    <p class="card-text">Nombre total de formations proposées.</p>
                </div>
            </div>
        </div>

        <!-- Statistiques des Cours Terminés -->
        <div class="col-md-3">
            <div class="card text-white bg-danger mb-3">
                <div class="card-header">Cours Terminés</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $coursTerminesCount }}</h5>
                    <p class="card-text">Nombre de cours terminés par les apprenants.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Autres Statistiques -->
    <div class="row mt-4">
        <!-- Statistique des Revenus -->
        <div class="col-md-6">
            <div class="card text-white bg-info mb-3">
                <div class="card-header">Revenus Totaux</div>
                <div class="card-body">
                    <h5 class="card-title">{{ number_format($revenusTotaux, 2) }} €</h5>
                    <p class="card-text">Revenus générés par les formations.</p>
                </div>
            </div>
        </div>

        <!-- Statistique des Factures -->
        <div class="col-md-6">
            <div class="card text-white bg-dark mb-3">
                <div class="card-header">Factures Totales</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $facturesCount }}</h5>
                    <p class="card-text">Nombre total de factures générées.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
