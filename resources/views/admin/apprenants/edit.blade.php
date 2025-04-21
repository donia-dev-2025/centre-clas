@extends('layouts.template')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4 text-center">Modifier Apprenant</h2>

    <form action="{{ route('apprenants.update', $apprenant->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" class="form-control" value="{{ $apprenant->nom }}" required>
        </div>

        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" id="prenom" class="form-control" value="{{ $apprenant->prenom }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $apprenant->email }}" required>
        </div>

        <div class="form-group">
            <label for="niveau">Niveau</label>
            <input type="text" name="niveau" id="niveau" class="form-control" value="{{ $apprenant->niveau }}" required>
        </div>

        <div class="form-group">
            <label for="bio">Biographie</label>
            <textarea name="bio" id="bio" class="form-control">{{ $apprenant->bio }}</textarea>
        </div>

        <div class="form-group">
            <label for="photo">Photo</label>
            <input type="file" name="photo" id="photo" class="form-control">
            @if($apprenant->photo)
                <img src="{{ asset('storage/'.$apprenant->photo) }}" width="100" alt="Photo actuelle">
            @endif
        </div>

        <div class="form-group">
            <label for="date_naissance">Date de naissance</label>
            <input type="date" name="date_naissance" id="date_naissance" class="form-control" value="{{ $apprenant->date_naissance }}">
        </div>

        <div class="form-group">
            <label for="genre">Genre</label>
            <select name="genre" id="genre" class="form-control">
                <option value="Homme" {{ $apprenant->genre == 'Homme' ? 'selected' : '' }}>Homme</option>
                <option value="Femme" {{ $apprenant->genre == 'Femme' ? 'selected' : '' }}>Femme</option>
            </select>
        </div>

        <div class="form-group">
            <label for="telephone">Téléphone</label>
            <input type="text" name="telephone" id="telephone" class="form-control" value="{{ $apprenant->telephone }}">
        </div>

        <div class="form-group">
            <label for="adresse">Adresse</label>
            <input type="text" name="adresse" id="adresse" class="form-control" value="{{ $apprenant->adresse }}">
        </div>

        <button type="submit" class="btn btn-success">Mettre à jour</button>
    </form>
</div>
@endsection
