@extends('layouts.formateur')

@section('formateur-content')
<div class="container">
    <h2>Créer un nouveau chapitre</h2>
    <form action="{{ route('chapitres.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Titre</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" rows="3" required></textarea>
        </div>

        <div class="form-group">
            <label for="video">Vidéo (optionnel)</label>
            <input type="file" name="video" class="form-control">
        </div>

        <div class="form-group">
            <label for="pdf">Document PDF (optionnel)</label>
            <input type="file" name="pdf" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Créer le chapitre</button>
    </form>
</div>
@endsection
