@extends('layouts.formateur')

@section('formateur-content')
<div class="container mt-5">
    <h2>Mes cours</h2>

    <!-- Lien pour ajouter un nouveau cours -->
    <a href="{{ route('formateurs.courses.create', ['formateur' => $formateur->id]) }}" class="btn btn-primary mb-3">Ajouter un nouveau cours</a>

    <!-- Affichage du message de succès si présent dans la session -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Vérifier si des cours sont disponibles -->
    @if($courses && $courses->isEmpty())
    <div class="alert alert-warning">Vous n'avez encore ajouté aucun cours.</div>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($courses as $course)
                    <tr>
                        <td>{{ $course->title }}</td>
                        <td>{{ $course->description }}</td>
                        <td>
                            <!-- Lien pour voir, modifier et supprimer le cours -->
                            <a href="{{ route('formateurs.courses.show', ['formateur' => $formateur->id, 'course' => $course->id]) }}" class="btn btn-info btn-sm">Voir</a>
                            <a href="{{ route('formateurs.courses.edit', ['formateur' => $formateur->id, 'course' => $course->id]) }}" class="btn btn-warning btn-sm">Modifier</a>
                            <form action="{{ route('formateurs.courses.destroy', ['formateur' => $formateur->id, 'course' => $course->id]) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Voulez-vous vraiment supprimer ce cours ?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
