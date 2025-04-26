@extends('layouts.formateur')

@section('formateur-content')
<div class="container">
    <h2>Liste des chapitres</h2>
    <a href="{{ route('chapitres.create') }}" class="btn btn-primary mb-3">Créer un nouveau chapitre</a>
    <table class="table">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($chapters as $chapter)
                <tr>
                    <td>{{ $chapter->title }}</td>
                    <td>{{ $chapter->description }}</td>
                    <td>
                        <a href="{{ route('chapitres.edit', $chapter->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                        <form action="{{ route('chapitres.destroy', $chapter->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
