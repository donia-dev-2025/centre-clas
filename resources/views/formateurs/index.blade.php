@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tableau de bord du Formateur</h1>

        <!-- Affichage des statistiques -->
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">Revenu total</div>
                    <div class="card-body">
                        @if(isset($totalRevenue))
                        <p>{{ $totalRevenue }} €</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">Formations total</div>
                    <div class="card-body">
                                                @if(isset($totalCourses))
                        <p>{{ $totalCourses }}</p>
                                                @endif
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">Nombre d'étudiants</div>
                    <div class="card-body">
                                                                        @if(isset($totalStudents))
                        <p>{{ $totalStudents }}</p>
                                                                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">Formations en cours</div>
                    <div class="card-body">
                                                                        @if(isset($ongoingCourses))
                        <p>{{ $ongoingCourses }}</p>
                                                                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Liste des formations du formateur -->
        <div class="card">
            <div class="card-header">
                <h3>Mes Formations</h3>
            </div>
            <div class="card-body">
                @if(isset($courses))
                @if($courses->count() == 0)  <!-- Utilisation de count() au lieu de isEmpty() -->
                    <p>Aucune formation trouvée. Créez une formation pour commencer !</p>
                @else
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Description</th>
                                <th>Nombre d'étudiants</th>
                                <th>Prix par étudiant</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($courses as $course)
                                <tr>
                                    <td>{{ $course->title }}</td>
                                    <td>{{ $course->description }}</td>
                                    <td>{{ $course->students_count }}</td>
                                    <td>{{ $course->price_per_student }} €</td>
                                    <td>{{ $course->status }}</td>
                                    <td>
                                        <a href="{{ route('trainer.course.edit', $course->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                                        <a href="{{ route('trainer.course.delete', $course->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette formation ?')">Supprimer</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
                @endif

            </div>
        </div>
    </div>
@endsection
