@extends('layouts.template')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4 text-center">👨‍🏫 Liste des Formateurs</h2>
    <a href="{{ route('formateurs.create') }}" class="btn btn-primary mb-3">➕ Ajouter un Formateur</a>

    <table class="table table-bordered table-striped text-center">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Spécialité</th>
                <th>Biographie</th>
                <th>Photo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($formateurs as $formateur)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $formateur->nom }}</td>
                <td>{{ $formateur->specialite }}</td>
                <td>{{ Str::limit($formateur->biographie, 50) }}</td>
                <td>
                    @if($formateur->photo)
                        <img src="{{ asset('storage/'.$formateur->photo) }}" width="80" height="50" alt="Photo">
                    @else
                        <em>Aucune photo</em>
                    @endif
                </td>
                <td>
                    <a href="{{ route('formateurs.show', $formateur->id) }}" class="btn btn-info btn-sm">Voir</a>
                    <a href="{{ route('formateurs.edit', $formateur->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                    <form action="{{ route('formateurs.destroy', $formateur->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce formateur ?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">🗑 Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
