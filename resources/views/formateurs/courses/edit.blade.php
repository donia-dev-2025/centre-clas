@extends('layouts.formateur')

@section('formateur-content')
<div class="container mt-5">
    <h2>Modifier le cours</h2>

    <form action="{{ route('formateurs.courses.update', ['formateur' => $formateur->id, 'course' => $course->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Titre</label>
            <input type="text" name="title" class="form-control" value="{{ $course->title }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" required>{{ $course->description }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>
@endsection
