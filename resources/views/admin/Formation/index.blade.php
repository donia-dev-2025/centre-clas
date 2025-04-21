@extends('layouts.template')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4 text-center">📚 Liste des Formations</h2>

    <!-- Bouton pour créer une nouvelle formation -->
    <a href="{{ route('formations.create') }}" class="btn btn-primary mb-3">➕ Créer une nouvelle formation</a>

    <!-- Tableau des formations -->
    <table class="table table-bordered table-striped text-center">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Programme</th>
                <th>Leçons</th>
                <th>Étudiants</th>
                <th>Image</th>
                <th>Actions</th> <!-- Voir / Modifier / Supprimer -->
            </tr>
        </thead>
        <tbody>
            @forelse($formations as $formation)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $formation->titre }}</td>
                <td>{{ Str::limit($formation->description, 80) }}</td>
                <td>{{ Str::limit($formation->programme, 80) }}</td>
                <td>{{ $formation->lecons }}</td>
                <td>{{ $formation->etudiants }}</td>
                <td>
                    @if($formation->image)
                        <img src="{{ asset('images/' . $formation->image) }}" width="100" alt="Formation Image">
                    @else
                        <em>Aucune image</em>
                    @endif
                </td>
                <td>
                    <!-- Bouton Voir -->
                    <a href="{{ route('formations.show', $formation->id) }}" class="btn btn-info btn-sm">👁 Voir</a>

                    <!-- Bouton Modifier -->
                    <a href="{{ route('formations.edit', $formation->id) }}" class="btn btn-warning btn-sm">✏️ Modifier</a>

                    <!-- Bouton Supprimer -->
                    <form action="{{ route('formations.destroy', $formation->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette formation ?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">🗑 Supprimer</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="8">Aucune formation trouvée.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
