@extends('layouts.formateur')

@section('formateur-content')

<div class="container mt-5">
    <h2>Détails du cours: {{ $course->title }}</h2>

    <p><strong>Description:</strong> {{ $course->description }}</p>

    <h3>Chapitres</h3>
    <a href="{{ route('formateurs.courses.chapitres.create', ['formateur' => $formateur->id, 'course' => $course->id]) }}" class="btn btn-success mb-3">Créer un nouveau chapitre</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Titre du chapitre</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($course->chapitres as $chapitre)
                <tr>
                    <td>{{ $chapitre->title }}</td>
                    <td>{{ $chapitre->description }}</td>
                    <td>
                        <a href="{{ route('formateurs.courses.chapitres.edit', ['formateur' => $formateur->id, 'course' => $course->id, 'chapitre' => $chapitre->id]) }}" class="btn btn-warning btn-sm">Modifier</a>
                        <form action="{{ route('formateurs.courses.chapitres.destroy', ['formateur' => $formateur->id, 'course' => $course->id, 'chapitre' => $chapitre->id]) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Voulez-vous vraiment supprimer ce chapitre ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection

