@extends('layouts.template')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4 text-center">➕ Nouvelle Formation</h2>

    <form action="{{ route('formations.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="titre" class="form-label">Titre</label>
            <input type="text" name="titre" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label for="programme" class="form-label">Programme</label>
            <textarea name="programme" class="form-control" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="lecons" class="form-label">Nombre de Leçons</label>
            <input type="number" name="lecons" class="form-control" value="0">
        </div>

        <div class="mb-3">
            <label for="etudiants" class="form-label">Nombre d'Étudiants</label>
            <input type="number" name="etudiants" class="form-control" value="0">
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">✅ Créer Formation</button>
        <a href="{{ route('formations.index') }}" class="btn btn-secondary">Retour</a>
    </form>
</div>
@endsection
