@extends('layouts.template')

@section('content')
<div class="container mt-5">
    <h2>Ajouter une vidéo</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form action="{{ route('videos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titre de la vidéo</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="video_path" class="form-label">Vidéo</label>
            <input type="file" name="video_path" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="course_id" class="form-label">Cours</label>
            <select name="course_id" class="form-control" required>
                {{-- Assurez d'envoyer une liste de cours depuis le controller --}}
                @foreach($courses as $course)
                    <option value="{{ $course->id }}">{{ $course->title }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
@endsection
