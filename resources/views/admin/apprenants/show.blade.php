@extends('layouts.template')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4 text-center">Détails de l'Apprenant</h2>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $apprenant->nom }} {{ $apprenant->prenom }}</h5>
            <p><strong>Email:</strong> {{ $apprenant->email }}</p>
            <p><strong>Niveau:</strong> {{ $apprenant->niveau }}</p>
            <p><strong>Biographie:</strong> {{ $apprenant->bio }}</p>
            <p><strong>Date de Naissance:</strong> {{ $apprenant->date_naissance }}</p>
            <p><strong>Genre:</strong> {{ $apprenant->genre }}</p>
            <p><strong>Téléphone:</strong> {{ $apprenant->telephone }}</p>
            <p><strong>Adresse:</strong> {{ $apprenant->adresse }}</p>

            @if($apprenant->photo)
                <p><strong>Photo:</strong></p>
                <img src="{{ asset('storage/' . $apprenant->photo) }}" alt="Photo de l'apprenant" class="img-fluid rounded-circle" style="max-width: 150px;">
            @else
                <p><strong>Photo:</strong> Aucune photo disponible</p>
            @endif

            <h3 class="mt-4">Formations Associées</h3>
            @if($apprenant->formations->isNotEmpty())
                <ul class="list-group">
                    @foreach($apprenant->formations as $formation)
                        <li class="list-group-item">
                            <strong>{{ $formation->titre }}</strong> - {{ $formation->niveau }}
                        </li>
                    @endforeach
                </ul>
            @else
                <p>Aucune formation associée à cet apprenant.</p>
            @endif
        </div>
    </div>
</div>
@endsection
