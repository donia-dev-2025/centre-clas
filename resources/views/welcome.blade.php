@extends('layouts.template')

@section('styles')
<style>
  .text-mauve { color: #000000; }
  .stat-circle {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    background-color: #d6a3ff;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin: auto;
    color: white;
    font-weight: bold;
    font-size: 18px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
  }
  .stat-circle p { margin: 0; font-size: 24px; }
</style>
@endsection

@section('content')

{{-- Hero Section --}}
<section class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 mb-4 mb-md-0">
        <h2 class="fw-bold text-mauve">Des Formations pour Tous Vos Besoins</h2>
        <p class="mt-3">Découvrez un univers d'opportunités avec Centre CLAS...</p>
      </div>
      <div class="col-md-6">
        <img src="{{ asset('images/1.jpg') }}" alt="Formations CLAS" class="img-fluid rounded shadow">
      </div>
    </div>
  </div>
</section>

{{-- Pourquoi Nos Formations --}}
<section class="py-5 bg-light">
  <div class="container">
    <h3 class="text-center mb-4">Pourquoi Nos Formations ?</h3>
    <div class="row">
      @foreach ([
        ['title' => 'Formations En Présentiel', 'text' => 'Apprentissage interactif...', 'link' => '#'],
        ['title' => 'Formations En Ligne', 'text' => 'Apprentissage flexible...', 'link' => '#'],
        ['title' => 'Bibliothèque', 'text' => 'Cadre calme pour apprendre...', 'link' => '#'],
      ] as $formation)
        <div class="col-md-4 mb-4">
          <div class="card h-100 shadow-sm text-white" style="background-color: #5f4b8b;">
            <div class="card-body">
              <h5 class="card-title">{{ $formation['title'] }}</h5>
              <p class="card-text">{{ $formation['text'] }}</p>
              <a href="{{ $formation['link'] }}" class="btn btn-light">Voir Plus</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

{{-- Formations --}}
<section class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center mb-5">
      <div class="col-md-6">
        <h2 class="fw-bold text-primary">Des Cours Adaptés à Votre Parcours</h2>
        <p class="mt-3">Nous proposons des formations adaptées à tous les niveaux...</p>
      </div>
      <div class="col-md-6">
        <img src="{{ asset('images/2.png') }}" alt="Formations CLAS" class="img-fluid rounded shadow">
      </div>
    </div>

    <div class="row">
      @foreach([
        ['img' => 'frontend.jpg', 'title' => 'Frontend'],
        ['img' => 'backend.jpg', 'title' => 'Backend'],
        ['img' => 'angular.jpg', 'title' => 'Angular & .NET'],
        ['img' => 'laravel.jpg', 'title' => 'Angular & Laravel'],
        ['img' => 'meaan.png', 'title' => 'MEAN Stack'],
        ['img' => 'meern.jpg', 'title' => 'MERN Stack'],
        ['img' => 'java.jpg', 'title' => 'Java OOP'],
        ['img' => 'python.jpg', 'title' => 'Python / C Algo'],
        ['img' => 'data.jpg', 'title' => 'Power BI'],
      ] as $course)
      <div class="col-md-4 mb-4">
        <div class="card shadow-sm">
          <img src="{{ asset('images/' . $course['img']) }}" alt="{{ $course['title'] }}" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">{{ $course['title'] }}</h5>
            <p class="card-text">(0 rating)</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>

    <div class="row mt-5">
      <div class="col-md-3 mb-3 text-center">
        <div class="stat-circle"><p>7+</p><span>Formations</span></div>
      </div>
      <div class="col-md-3 mb-3 text-center">
        <div class="stat-circle"><p>10+</p><span>Années</span></div>
      </div>
      <div class="col-md-3 mb-3 text-center">
        <div class="stat-circle"><p>15+</p><span>Formateurs</span></div>
      </div>
      <div class="col-md-3 mb-3 text-center">
        <div class="stat-circle"><p>100%</p><span>Pratique</span></div>
      </div>
    </div>
  </div>
</section>

@endsection
