@extends('layouts.template')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4 text-center">👁 Détails de la Formation</h2>

    <!-- Affichage des détails de la formation -->
    <div class="card">
        <div class="card-header">
            <h4>{{ $formation->titre }}</h4>
        </div>
        <div class="card-body">
            <p><strong>Description :</strong> {{ $formation->description }}</p>
            <p><strong>Programme :</strong> {{ $formation->programme }}</p>
            <p><strong>Leçons :</strong> {{ $formation->lecons }}</p>
            <p><strong>Étudiants inscrits :</strong> {{ $formation->etudiants }}</p>

            @if($formation->image)
                <p><strong>Image :</strong><br>
                    <img src="{{ asset('storage/'.$formation->image) }}" width="200" alt="Formation Image">
                </p>
            @else
                <p><strong>Image :</strong> Aucune image disponible.</p>
            @endif
        </div>
    </div>

    <div class="mt-3">
        <a href="{{ route('formations.edit', $formation->id) }}" class="btn btn-warning">✏️ Modifier</a>
        <form action="{{ route('formations.destroy', $formation->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette formation ?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">🗑 Supprimer</button>
        </form>
        <a href="{{ route('formations.index') }}" class="btn btn-secondary">Retour à la liste</a>
    </div>
</div>
@endsection
