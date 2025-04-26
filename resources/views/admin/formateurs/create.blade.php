@extends('layouts.template')

@section('content')
<div class="container mt-5">
    <h2>Ajouter un Formateur</h2>

    <form action="{{ route('formateurs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input type="text" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="specialite">Spécialité</label>
            <input type="text" class="form-control" id="specialite" name="specialite" required>
        </div>

        <div class="form-group">
            <label for="biographie">Biographie</label>
            <textarea class="form-control" id="biographie" name="biographie" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <label for="photo">Photo</label>
            <input type="file" class="form-control" id="photo" name="photo">
        </div>

        <button type="submit" class="btn btn-success mt-3">Ajouter</button>
    </form>
</div>
@endsection
