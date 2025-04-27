@extends('layouts.formateur')

@section('formateur-content')

<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container-fluid">
      <!-- Logo -->
      <a class="navbar-brand fw-bold text-primary" href="#">Dashboard</a>

      <!-- Toggle button (pour mobile) -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTopbar" aria-controls="navbarTopbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar content -->
      <div class="collapse navbar-collapse justify-content-end" id="navbarTopbar">
        <ul class="navbar-nav mb-2 mb-lg-0 align-items-center">

          <!-- Search (optional) -->
          <li class="nav-item me-3">
            <form class="d-flex">
              <input class="form-control" type="search" placeholder="Chercher..." aria-label="Search">
            </form>
          </li>

          <!-- Notifications -->
          <li class="nav-item me-3 position-relative">
            <a class="nav-link" href="#">
              <i class="bi bi-bell fs-5"></i> <!-- Bootstrap Icons -->
              <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle">
                <span class="visually-hidden">New alerts</span>
              </span>
            </a>
          </li>

          <!-- Profile -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdownProfile" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://i.pravatar.cc/40?img=12" class="rounded-circle" height="30" alt="Avatar" loading="lazy" />
                <span class="ms-2 fw-semibold">Formateur</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownProfile">
              <li><a class="dropdown-item" href="#">Mon Profil</a></li>
              <li><a class="dropdown-item" href="#">Paramètres</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Déconnexion</a></li>
            </ul>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-4">
    <h1 class="h3 mb-3 fw-bold" style="color: #8849b3;">Bienvenue , Formateur !</h1>
    <p class="text-muted">Gérez vos cours et vidéos facilement depuis votre espace personnel.</p>
  </div>

  <div class="container mt-5">
    <!-- Titre -->
    <div class="d-flex justify-content-between align-items-center mb-4">
      <div>
        <h1 class="h2 fw-bold" style="color: #8849b3;">Bienvenue Formateur 👋</h1>
        <p class="text-muted">Gérez vos cours, chapitres et vidéos facilement depuis votre tableau de bord.</p>
      </div>
    </div>

    <!-- Statistiques Cards -->
    <div class="row g-4">
      <!-- Card 1 -->
      <div class="col-md-3">
        <div class="card stat-card text-center">
          <div class="card-body">
            <i class="bi bi-journal-text fs-1 mb-3"></i>
            <h5 class="card-title fw-bold">12</h5>
            <p class="card-text">Cours</p>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-3">
        <div class="card stat-card text-center">
          <div class="card-body">
            <i class="bi bi-camera-video fs-1 mb-3"></i>
            <h5 class="card-title fw-bold">48</h5>
            <p class="card-text">Vidéos</p>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-3">
        <div class="card stat-card text-center">
          <div class="card-body">
            <i class="bi bi-folder2-open fs-1 mb-3"></i>
            <h5 class="card-title fw-bold">15</h5>
            <p class="card-text">Chapitres</p>
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-md-3">
        <div class="card stat-card text-center">
          <div class="card-body">
            <i class="bi bi-people fs-1 mb-3"></i>
            <h5 class="card-title fw-bold">120</h5>
            <p class="card-text">Étudiants</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- CSS sur mesure -->
  <style>
    .stat-card {
      background-color: #cfb8e0;
      border: none;
      transition: all 0.4s ease;
      color:#8849b3 ;
      color: ;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .stat-card:hover {
      background-color: #c77dff;
      transform: translateY(-8px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
      cursor: pointer;
    }

    .stat-card i {
      color: #6a0dad;
    }

    .stat-card:hover i {
      color: #fff;
        }

    .stat-card h5, .stat-card p {
      margin: 0;
    }
  </style>
@endsection

