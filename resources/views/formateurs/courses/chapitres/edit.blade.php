@extends('layouts.formateur')

@section('formateur-content')
<div class="container">
    <h2>Modifier le chapitre</h2>
    <form action="{{ route('chapitres.update', $chapter->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Titre</label>
            <input type="text" name="title" class="form-control" value="{{ $chapter->title }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" rows="3" required>{{ $chapter->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="video">Vidéo (optionnel)</label>
            <input type="file" name="video" class="form-control">
        </div>

        <div class="form-group">
            <label for="pdf">Document PDF (optionnel)</label>
            <input type="file" name="pdf" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Mettre à jour le chapitre</button>
    </form>
</div>
@endsection
