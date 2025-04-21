@extends('layouts.template')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4 text-center">👨‍🎓 Liste des Apprenants</h2>
    <a href="{{ route('apprenants.create') }}" class="btn btn-primary mb-3">➕ Ajouter un Apprenant</a>

    <table class="table table-bordered table-striped text-center">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Niveau</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($apprenants as $apprenant)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $apprenant->nom }}</td>
                <td>{{ $apprenant->email }}</td>
                <td>{{ $apprenant->niveau }}</td>
                <td>
                    <a href="{{ route('apprenants.show', $apprenant->id) }}" class="btn btn-info btn-sm">Voir</a>
                    <a href="{{ route('apprenants.edit', $apprenant->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                    <form action="{{ route('apprenants.destroy', $apprenant->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet apprenant ?');">
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
