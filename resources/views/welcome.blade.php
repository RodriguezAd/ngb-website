@extends('app')

@section('content')

    <header class="hero-section">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner custom-carousel-height">
                <div class="carousel-item active">
                    <img src="{{ asset('images/projet1.jpg') }}" class="d-block w-100" alt="Projet 1">
                    <div class="carousel-caption d-md-block">
                        <h1>QUALITÉ - TEMPS - PRIX</h1>
                        <p>Votre partenaire de confiance pour des projets BTP réussis.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/projet2.jpeg') }}" class="d-block w-100" alt="Projet 2">
                    <div class="carousel-caption d-md-block">
                        <h1>QUALITÉ - TEMPS - PRIX</h1>
                        <p>Une nouvelle génération de constructeurs à votre service.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>
    <section id="about" class="container">
        <div class="row text-center">
            <div class="col-12 col-md-8 mx-auto">
                <h2 class="display-4 fw-bold mb-4 text-primary-orange">QUI SOMMES-NOUS ?</h2>
                <p class="lead text-muted">
                    NEW GENERATION OF BUILDERS (NGB) est une entreprise spécialisée dans le Bâtiment et les Travaux Publics. 
                    Nous nous engageons à offrir des services de construction de haute qualité, en respectant les délais et les budgets. 
                    Notre approche innovante et notre équipe d'experts garantissent des résultats qui dépassent vos attentes.
                </p>
                <a href="/about" class="btn btn-lg btn-danger mt-4">Découvrez notre histoire</a>
            </div>
        </div>
    </section>
    <section id="services" class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 fw-bold text-primary-orange">NOS SERVICES</h2>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 text-center">
            <div class="col">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body">
                        <i class="bi bi-pencil-square text-primary display-4 mb-3"></i>
                        <h5 class="card-title fw-bold">Études Architecturales</h5>
                        <p class="card-text text-muted">
                            Conception de plans innovants, en respectant vos besoins et l'environnement.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body">
                        <i class="bi bi-tools text-primary display-4 mb-3"></i>
                        <h5 class="card-title fw-bold">Bâtiment & Travaux Publics</h5>
                        <p class="card-text text-muted">
                            De la construction neuve à la rénovation, nous gérons tous vos projets BTP.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body">
                        <i class="bi bi-chat-left-dots text-primary display-4 mb-3"></i>
                        <h5 class="card-title fw-bold">Conseils & Accompagnement</h5>
                        <p class="card-text text-muted">
                            Notre équipe d'experts vous guide à chaque étape de votre projet.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body">
                        <i class="bi bi-laptop text-primary display-4 mb-3"></i>
                        <h5 class="card-title fw-bold">Formations en DAO</h5>
                        <p class="card-text text-muted">
                            Apprenez les logiciels de conception pour devenir un expert.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <a href="/services" class="btn btn-lg btn-danger">Voir tous nos services</a>
        </div>
    </section>
    <section id="projects" class="container bg-light">
        <div class="text-center mb-5">
            <h2 class="display-4 fw-bold text-primary-orange">NOS RÉALISATIONS</h2>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <div class="col">
                <div class="card h-100 shadow border-0 d-flex flex-column">
                    <img src="{{ asset('images/projet2.jpeg') }}" class="card-img-top" alt="Projet Réalisé 2">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">Construction de villa moderne</h5>
                        <p class="card-text text-muted">
                            Un projet résidentiel unique, alliant design et fonctionnalité.
                        </p>
                        <div class="mt-auto">
                            <a href="#" class="btn btn-sm btn-primary">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow border-0 d-flex flex-column">
                    <img src="{{ asset('images/projet1.jpg') }}" class="card-img-top" alt="Projet Réalisé 1">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">Rénovation de bureau</h5>
                        <p class="card-text text-muted">
                            Modernisation complète d'un espace de travail pour une productivité accrue.
                        </p>
                        <div class="mt-auto">
                            <a href="#" class="btn btn-sm btn-primary">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow border-0 d-flex flex-column">
                    <img src="{{ asset('images/btp-services.jpg') }}" class="card-img-top" alt="Projet Réalisé 4">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">Construction de complexe commercial</h5>
                        <p class="card-text text-muted">
                            Un bâtiment à l'architecture audacieuse, construit selon les normes les plus strictes.
                        </p>
                        <div class="mt-auto">
                            <a href="#" class="btn btn-sm btn-primary">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <a href="/projects" class="btn btn-lg btn-danger">Voir tous nos projets</a>
        </div>
    </section>
    <section id="contact" class="container my-5">
        <div class="text-center mb-5">
            <h2 class="display-4 fw-bold text-primary-orange">NOUS CONTACTER</h2>
            <p class="lead text-muted">
                Pour toute demande de devis ou question, remplissez le formulaire ci-dessous.
            </p>
        </div>
        
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card shadow p-4">
                    <form action="{{ route('contact.submit') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Votre nom</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Votre email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Votre numéro de téléphone</label>
                            <input type="tel" class="form-control" id="phone" name="phone">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Votre message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-danger btn-lg">Envoyer le message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection