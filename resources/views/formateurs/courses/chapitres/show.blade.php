@extends('layouts.formateur')

@section('formateur-content')
<div class="container">
    <h2>{{ $chapter->title }}</h2>
    <p>{{ $chapter->description }}</p>
    @if($chapter->video)
        <video controls>
            <source src="{{ asset('storage/videos/' . $chapter->video) }}" type="video/mp4">
            Votre navigateur ne supporte pas la vidéo.
        </video>
    @endif
    @if($chapter->pdf)
        <a href="{{ asset('storage/pdfs/' . $chapter->pdf) }}" class="btn btn-info" target="_blank">Télécharger le PDF</a>
    @endif
</div>
@endsection
