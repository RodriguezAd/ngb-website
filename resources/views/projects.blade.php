@extends('app')

@section('content')

<div class="container-fluid bg-light py-5">
    <div class="row text-center">
        <div class="col-12">
            <h1 class="display-4 fw-bold text-primary-orange">NOS RÉALISATIONS</h1>
            <p class="lead text-muted">Découvrez une sélection de nos projets phares.</p>
        </div>
    </div>
</div>

<section class="container my-5">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        
        <div class="col">
            <div class="card h-100 shadow border-0 d-flex flex-column">
                <img src="{{ asset('images/projet2.jpeg') }}" class="card-img-top project-image" alt="Construction de villa moderne">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold">Construction de villa moderne</h5>
                    <p class="card-text text-muted">
                        Un projet résidentiel unique, alliant design et fonctionnalité.
                    </p>
                    <div class="mt-auto">
                        <a href="#" class="btn btn-sm btn-primary">Voir le projet</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 shadow border-0 d-flex flex-column">
                <img src="{{ asset('images/projet1.jpg') }}" class="card-img-top project-image" alt="Rénovation de bureau">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold">Rénovation de bureau</h5>
                    <p class="card-text text-muted">
                        Modernisation complète d'un espace de travail pour une productivité accrue.
                    </p>
                    <div class="mt-auto">
                        <a href="#" class="btn btn-sm btn-primary">Voir le projet</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 shadow border-0 d-flex flex-column">
                <img src="{{ asset('images/btp-services.jpg') }}" class="card-img-top project-image" alt="Construction de complexe commercial">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold">Construction de complexe commercial</h5>
                    <p class="card-text text-muted">
                        Un bâtiment à l'architecture audacieuse, construit selon les normes les plus strictes.
                    </p>
                    <div class="mt-auto">
                        <a href="#" class="btn btn-sm btn-primary">Voir le projet</a>
                    </div>
                </div>
            </div>
        </div>

        </div>
</section>

@endsection