@extends('layouts.template')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4 text-center">✏️ Modifier la Formation</h2>

    <!-- Formulaire de modification de la formation -->
    <form action="{{ route('formations.update', $formation->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="titre">Titre</label>
            <input type="text" class="form-control" id="titre" name="titre" value="{{ old('titre', $formation->titre) }}" required>
        </div>

        <div class="form-group mt-3">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4" required>{{ old('description', $formation->description) }}</textarea>
        </div>

        <div class="form-group mt-3">
            <label for="programme">Programme</label>
            <textarea class="form-control" id="programme" name="programme" rows="4">{{ old('programme', $formation->programme) }}</textarea>
        </div>

        <div class="form-group mt-3">
            <label for="lecons">Leçons</label>
            <input type="number" class="form-control" id="lecons" name="lecons" value="{{ old('lecons', $formation->lecons) }}" required>
        </div>

        <div class="form-group mt-3">
            <label for="etudiants">Étudiants</label>
            <input type="number" class="form-control" id="etudiants" name="etudiants" value="{{ old('etudiants', $formation->etudiants) }}" required>
        </div>

        <div class="form-group mt-3">
            <label for="image">Image</label>
            <input type="file" class="form-control" id="image" name="image">
            @if($formation->image)
                <p>Image actuelle : <img src="{{ asset('storage/'.$formation->image) }}" width="100" height="60" alt="Image"></p>
            @endif
        </div>

        <div class="form-group mt-3">
            <button type="submit" class="btn btn-success">Sauvegarder les modifications</button>
        </div>
    </form>
</div>
@endsection
