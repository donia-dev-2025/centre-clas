
@extends('layouts.template')

@section('content')
<section class="container py-5">
    <h2 class="text-center mb-4">Archives : Cours</h2>
    <p class="text-center text-muted">Date de sortie (la plus récente en premier)</p>

    <div class="row g-4 mt-4">
        <!-- Cours -->
        @php
            $courses = [
                [
                    'title' => 'Formation Algorithme : Python /C',
                    'description' => 'Perfectionnez vos compétences en algorithmique et structures de données...',
                    'program' => 'Introduction aux Algorithmes, Structures de Données, Algorithmique de Base, Tri et Recherche, Complexité Algorithmique',
                    'lessons' => 0,
                    'students' => 0,
                    'image' => 'algo.jpg',
                ],
                [
                    'title' => 'Programmation Orientée Objet en Java',
                    'description' => 'Découvrez les principes essentiels de la programmation orientée objet avec Java...',
                    'program' => 'Java de base, POO Avancée, Collections, Projet Final',
                    'lessons' => 0,
                    'students' => 0,
                    'image' => asset('images/java.jpg'),
                ],
                [
                    'title' => 'Formation MERN – Full-Stack',
                    'description' => 'Maîtrisez MongoDB, Express.js, React et Node.js dans cette formation intensive...',
                    'program' => 'MongoDB, Express APIs, React, Node.js, Projet MERN',
                    'lessons' => 0,
                    'students' => 0,
                    'image' => asset('images/meern.jpg'),
                ],
                [
                    'title' => 'Formation MEAN – Développement Full-Stack',
                    'description' => 'Apprenez le stack MEAN complet avec MongoDB, Express, Angular, Node.js...',
                    'program' => 'MongoDB, Angular, Node.js, Intégration MEAN',
                    'lessons' => 0,
                    'students' => 1,
                    'image' => 'mean.jpg',
                ],
                [
                    'title' => 'Formation Angular et Laravel',
                    'description' => 'Angular pour le frontend dynamique et Laravel pour le backend sécurisé...',
                    'program' => 'Angular : Composants, Validation, API | Laravel : MVC, Auth, Sécurité',
                    'lessons' => 0,
                    'students' => 3,
                    'image' => 'angular-laravel.jpg',
                ],
                [
                    'title' => 'Formation Angular et .NET',
                    'description' => 'Angular pour les interfaces et .NET pour le backend robuste...',
                    'program' => 'Angular : Composants, Routage | .NET : ASP.NET Core, C#',
                    'lessons' => 0,
                    'students' => 0,
                    'image' => 'angular-dotnet.jpg',
                ],
            ];
        @endphp

        @foreach ($courses as $course)
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="{{ asset('assets/img/courses/' . $course['image']) }}" class="card-img-top" alt="{{ $course['title'] }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $course['title'] }}</h5>
                    <p class="card-text text-muted mb-2"><strong>Description :</strong> {{ $course['description'] }}</p>
                    <p class="card-text"><strong>Programme :</strong> {{ $course['program'] }}</p>
                </div>
                <div class="card-footer bg-white d-flex justify-content-between">
                    <span><i class="bi bi-journal-code me-1"></i>{{ $course['lessons'] }} Lessons</span>
                    <span><i class="bi bi-people me-1"></i>{{ $course['students'] }} Students</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection
