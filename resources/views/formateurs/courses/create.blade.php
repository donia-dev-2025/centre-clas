@extends('layouts.formateur')

@section('formateur-content')

<div class="container mt-5">
    <h2>Ajouter un nouveau cours</h2>

    <form action="{{ route('formateurs.courses.store', ['formateur' => $formateur->id]) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Titre</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-success">Ajouter</button>
    </form>
</div>

@endsection
