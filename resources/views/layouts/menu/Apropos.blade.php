@extends('layouts.template')

@section('content')

<!-- Section A Propos -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-4">
            <h5 class="text-primary">A Propos</h5>
            <h2 class="fw-bold">Apprenez Sans Limites</h2>

        </div>
        <div class="row align-items-center">
            <div class="col-md-6 mb-4">
                <img src="{{ asset('images/4.jpg') }}" alt="About Us" class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6">
                <p>
                    Nous croyons que l'apprentissage n'a pas d'âge et ne devrait pas être limité par le temps ou la distance.
                    C'est pourquoi nous offrons des formations pour tous les niveaux, accessibles aussi bien en ligne qu'en présentiel.
                    Que vous soyez un élève, un étudiant ou un professionnel, nos programmes sont conçus pour s'adapter à votre emploi du temps et à vos besoins spécifiques.
                </p>
                <div class="row">
                    <div class="col-6 mb-2">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-person-check-fill text-primary me-3"></i>
                            <span class="fw-bold">Expert Instructors</span>
                        </div>
                    </div>
                    <div class="col-6 mb-2">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-clock-fill text-primary me-3"></i>
                            <span class="fw-bold">Lifetime Access</span>
                        </div>
                    </div>
                    <div class="col-6 mb-2">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-laptop text-primary me-3"></i>
                            <span class="fw-bold">Remote Learning</span>
                        </div>
                    </div>
                    <div class="col-6 mb-2">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-person-lines-fill text-primary me-3"></i>
                            <span class="fw-bold">Self Development</span>
                        </div>
                    </div>
                </div>


                <a href="#" class="btn btn-primary mt-3">View Courses</a>
            </div>
        </div>
    </div>
</section>

<!-- Section Avantages -->
<section class="py-5">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col">
                <h2 class="fw-bold">Pourquoi Nos Formations ?</h2>
                <p class="text-muted">Education for everyone</p>
            </div>
        </div>
        <div class="row g-4">
            <!-- Bloc 1 -->
            <div class="col-md-6 col-lg-3 text-center">
                <img src="{{ asset('images/technologie.jpg') }}" class="mb-3" width="60" alt="Tech">
                <h5>Apprenez Les Nouvelles Technologies</h5>
                <p>Maîtriser les compétences les plus récentes et les nouvelles technologies.</p>
                <a href="#" class="btn btn-outline-primary btn-sm">Start Now!</a>
            </div>
            <!-- Bloc 2 -->
            <div class="col-md-6 col-lg-3 text-center">
                <img src="{{ asset('images/rythme.jpeg') }}" class="mb-3" width="60" alt="Rythme">
                <h5>Apprenez à Votre Rythme</h5>
                <p>Chacun préfère apprendre à son propre rythme, ce qui conduit à des résultats excellents.</p>
                <a href="#" class="btn btn-outline-primary btn-sm">Start Now!</a>
            </div>
            <!-- Bloc 3 -->
            <div class="col-md-6 col-lg-3 text-center">
                <img src="{{ asset('images/experts.jpeg') }}" class="mb-3" width="60" alt="Experts">
                <h5>Apprenez avec des Experts</h5>
                <p>Des enseignants expérimentés peuvent accélérer votre apprentissage.</p>
                <a href="#" class="btn btn-outline-primary btn-sm">Start Now!</a>
            </div>
            <!-- Bloc 4 -->
            <div class="col-md-6 col-lg-3 text-center">
                <img src="{{ asset('images/stage.jpeg') }}" class="mb-3" width="60" alt="Stage">
                <h5>Profitez d’un Stage</h5>
                <p>Bénéficiez d’un stage pour enrichir votre expérience pratique.</p>
                <a href="#" class="btn btn-outline-primary btn-sm">Start Now!</a>
            </div>
        </div>
    </div>
</section>

<!-- Section Project-Based -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4">
                <img src="{{ asset('images/proj.jpg') }}" alt="Project Based" class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6">
                <h3 class="fw-bold">PROJECT-BASED</h3>
                <p>
                    Développez des bases solides grâce à notre approche "PROJECT-BASED". Participez à une formation conçue par des experts,
                    où vous travaillerez sur des projets concrets pour acquérir des compétences pratiques et actionnables.
                    Construisez un portfolio impressionnant et démarquez-vous lors de votre recherche d'emploi.
                </p>
                <a href="#" class="btn btn-primary">Join For Free</a>
            </div>
        </div>
    </div>
</section>

<!-- Section Experts -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center flex-md-row-reverse">
            <div class="col-md-6 mb-4">
                <img src="{{ asset('images/experr.jpg') }}" alt="Experts" class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6">
                <h3 class="fw-bold">DES EXPERTS DU SECTEUR</h3>
                <p>
                    Chez Centre CLAS, vous ne suivez pas simplement des cours ; vous bénéficiez d'un véritable partenariat avec des experts passionnés.
                    Nos formateurs sont là pour vous guider, répondre à vos questions, et vous aider à surmonter les défis.
                </p>
                <p>
                    Profitez de l'expérience et des connaissances de professionnels du secteur qui se consacrent pleinement à votre réussite et à votre développement professionnel.
                </p>
                <a href="#" class="btn btn-primary">Join For Free</a>
            </div>
        </div>
    </div>
</section>

<!-- Section Débutants -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4">
                <img src="{{ asset('images/debutant.jpg') }}" alt="Débutants" class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6">
                <h3 class="fw-bold">Accessible aux Débutants</h3>
                <p>
                    Dans notre centre de formation, nous croyons que chacun peut apprendre et réussir, quel que soit son point de départ.
                    Nos cours sont conçus pour les débutants, garantissant que même ceux sans expérience préalable peuvent facilement suivre et développer leurs compétences.
                </p>
                <p>
                    Nous offrons des instructions étape par étape, une pratique concrète, et un soutien continu pour vous aider à vous sentir confiant et capable tout au long de votre parcours.
                </p>
                <a href="#" class="btn btn-primary">Join For Free</a>
            </div>
        </div>
    </div>
</section>

@endsection
