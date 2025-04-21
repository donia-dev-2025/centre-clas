@extends('layouts.template')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4 text-center">Ajouter un Apprenant</h2>

    <form action="{{ route('apprenants.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" id="prenom" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="niveau">Niveau</label>
            <input type="text" name="niveau" id="niveau" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="bio">Biographie</label>
            <textarea name="bio" id="bio" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="photo">Photo</label>
            <input type="file" name="photo" id="photo" class="form-control">
        </div>

        <div class="form-group">
            <label for="date_naissance">Date de naissance</label>
            <input type="date" name="date_naissance" id="date_naissance" class="form-control">
        </div>

        <div class="form-group">
            <label for="genre">Genre</label>
            <select name="genre" id="genre" class="form-control">
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
            </select>
        </div>

        <div class="form-group">
            <label for="telephone">Téléphone</label>
            <input type="text" name="telephone" id="telephone" class="form-control">
        </div>

        <div class="form-group">
            <label for="adresse">Adresse</label>
            <input type="text" name="adresse" id="adresse" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Enregistrer</button>
    </form>
</div>
@endsection
