<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Centre CLAS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    html, body { height: 100%; margin: 0; }
    .page-wrapper { display: flex; flex-direction: column; min-height: 100vh; }
    .page-content { flex: 1; text-align: center; }
    .mauve-wrapper {
      border: 3px solid #800080;
      border-radius: 0;
      padding: 10px 20px;
      background-color: #f5e6ff;
      width: 100%;
    }
    nav.navbar, .footer-wrapper { border-radius: 0; width: 100%; }
    .footer-title { font-weight: bold; color: #800080; }
    .footer-wrapper a { color: #800080; text-decoration: none; }
    .footer-wrapper a:hover { text-decoration: underline; }
  </style>
  @yield('styles') {{-- Pour les styles spécifiques --}}
</head>

<body>
  <div class="page-wrapper">
    {{-- Navbar --}}
    <div class="mauve-wrapper">
      <nav class="navbar navbar-expand-lg shadow-sm">
        <div class="container-fluid">
          <a class="navbar-brand fw-bold" href="#">CLAS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link" href="#">Accueil</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('Apropos') }}">À propos</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('Cours')}}">Cours</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Actualités</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    {{-- Contenu principal --}}
    <div class="page-content">
      @yield('content')
    </div>

    {{-- Footer --}}
    <div class="mauve-wrapper footer-wrapper">
      <div class="container-fluid">
        <div class="row text-center text-md-start">
          <div class="col-md-4 mb-3">
            <h5 class="footer-title">À propos</h5>
            <p>Centre de Langues Appliquées et Services (CLAS).</p>
          </div>
          <div class="col-md-4 mb-3">
            <h5 class="footer-title">Liens utiles</h5>
            <ul class="list-unstyled">
              <li><a href="#">Accueil</a></li>
              <li><a href="#">Cours</a></li>
              <li><a href="#">Actualités</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
          <div class="col-md-4 mb-3">
            <h5 class="footer-title">Contact</h5>
            <ul class="list-unstyled">
              <li>📍 Rue Exemple, Tunis</li>
              <li>📞 +216 12 345 678</li>
              <li>📧 contact@clas.tn</li>
            </ul>
          </div>
        </div>
        <hr />
        <p class="text-center mb-0">© 2025 CLAS. Tous droits réservés.</p>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  @yield('scripts') {{-- Pour les scripts spécifiques --}}
</body>
</html>
