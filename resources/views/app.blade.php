<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEW GENERATION OF BUILDERS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo.jpg') }}" alt="Logo NGB" style="height: 40px; width: 70px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">À Propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/projects">Réalisations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary ms-lg-3" href="/contact">Demande de devis</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    @yield('content')

    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4 text-primary-orange">Contact</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="bi bi-geo-alt-fill me-2"></i> Mvog-Ada, Yaoundé, Cameroun
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-envelope-fill me-2"></i> contact@ngb.cm
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-telephone-fill me-2"></i> +237 600 00 00 00
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4 text-primary-orange">Liens rapides</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="/" class="text-white text-decoration-none">Accueil</a></li>
                        <li class="mb-2"><a href="/about" class="text-white text-decoration-none">À Propos</a></li>
                        <li class="mb-2"><a href="/services" class="text-white text-decoration-none">Services</a></li>
                        <li class="mb-2"><a href="/projects" class="text-white text-decoration-none">Réalisations</a></li>
                        <li class="mb-2"><a href="/contact" class="text-white text-decoration-none">Contact</a></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="text-uppercase mb-4 text-primary-orange">Suivez-nous</h5>
                    <a href="#" class="text-white me-3 fs-3"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-white me-3 fs-3"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="text-white me-3 fs-3"><i class="bi bi-linkedin"></i></a>
                    <a href="#" class="text-white fs-3"><i class="bi bi-instagram"></i></a>
                </div>
                <div class="col-12 mt-4 text-center">
                    <h5 class="text-uppercase mb-4 text-primary-orange">Nos partenaires</h5>
                    <div class="d-flex flex-wrap justify-content-center align-items-center">
                        <img src="{{ asset('images/partenaire1.jpeg') }}" alt="Logo Partenaire 1" class="img-fluid grayscale-logo mx-3 my-2" style="height: 50px;">
                        <img src="{{ asset('images/partenaire2.jpeg') }}" alt="Logo Partenaire 2" class="img-fluid grayscale-logo mx-3 my-2" style="height: 50px;">
                        <img src="{{ asset('images/partenaire3.jpeg') }}" alt="Logo Partenaire 3" class="img-fluid grayscale-logo mx-3 my-2" style="height: 50px;">
                        <img src="{{ asset('images/partenaire4.jpeg') }}" alt="Logo Partenaire 4" class="img-fluid grayscale-logo mx-3 my-2" style="height: 50px;">
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="text-center">
                <p class="mb-0">
                    &copy; <span id="currentYear"></span> NEW GENERATION OF BUILDERS. Tous droits réservés.
                </p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>