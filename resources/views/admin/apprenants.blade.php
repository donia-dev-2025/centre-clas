@extends('layouts.template')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Liste des Apprenants</h2>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Formation</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Sami Kefi</td>
                <td>sami@example.com</td>
                <td>Angular & Laravel</td>
                <td>
                    <button class="btn btn-sm btn-info">Voir</button>
                    <button class="btn btn-sm btn-danger">Supprimer</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
