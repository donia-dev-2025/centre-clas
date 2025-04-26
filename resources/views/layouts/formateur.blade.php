<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Formateur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            overflow-x: hidden;
        }
        .sidebar {
            height: 100vh;
            background-color: #f8f9fa;
            padding: 1rem;
            position: fixed;
            width: 250px;
        }
        .content {
            margin-left: 250px;
            padding: 2rem;
            width: calc(100% - 250px);
        }
        .sidebar .nav-link {
            color: #333;
            margin-bottom: 10px;
        }
        .sidebar .nav-link:hover {
            background-color: #ddd;
            border-radius: 8px;
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <h4 class="mb-4">Formateur test</h4>
        {{-- <a href="{{ route('formateurs.courses.index') }}" class="nav-link">📚 Mes Formations</a> --}}
        {{-- <a href="{{ route('formateurs.courses.create') }}" class="nav-link">➕ Ajouter Formation</a> --}}
        {{-- Ajouter d'autres liens ici si besoin --}}
    </div>

    <div class="content">
        @yield('formateur-content')
    </div>

</body>
</html>
