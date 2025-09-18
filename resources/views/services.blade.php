@extends('app')

@section('content')

<div class="container-fluid bg-light py-5">
    <div class="row text-center">
        <div class="col-12">
            <h1 class="display-4 fw-bold text-primary-orange">NOS SERVICES</h1>
            <p class="lead text-muted">Découvrez en détail l'ensemble de nos prestations.</p>
        </div>
    </div>
</div>

<section class="container my-5">
    
    <div class="row g-5">
        <div class="col-md-6 d-flex align-items-center">
            <div>
                <h3 class="fw-bold text-primary-orange">Études Architecturales</h3>
                <p class="text-muted">
                    Notre équipe d'architectes et de dessinateurs conçoit des plans sur mesure, 
                    en tenant compte de vos aspirations, du contexte local et des dernières innovations 
                    en matière de construction durable. De l'esquisse initiale aux plans d'exécution, 
                    nous vous accompagnons pour donner vie à votre vision.
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('images/projet-services.jpeg') }}" alt="Études Architecturales" class="img-fluid rounded shadow service-image">
        </div>
    </div>

    <hr class="my-5">

    <div class="row g-5">
        <div class="col-md-6 d-flex align-items-center order-md-2">
            <div>
                <h3 class="fw-bold text-primary-orange">Bâtiment & Travaux Publics</h3>
                <p class="text-muted">
                    De la construction de bâtiments résidentiels à la réalisation de grands ouvrages 
                    publics, nous gérons votre projet de A à Z. Nos équipes de professionnels qualifiés 
                    travaillent avec rigueur et précision pour garantir la qualité, le respect des délais 
                    et la sécurité sur le chantier.
                </p>
            </div>
        </div>
        <div class="col-md-6 order-md-1">
            <img src="{{ asset('images/btp-services.jpg') }}" alt="Bâtiment & Travaux Publics" class="img-fluid rounded shadow service-image">
        </div>
    </div>
    
    <hr class="my-5">

    <div class="row g-5">
        <div class="col-md-6 d-flex align-items-center">
            <div>
                <h3 class="fw-bold text-primary-orange">Dimensionnement de structure</h3>
                <p class="text-muted">
                    Nous réalisons des calculs précis et des analyses de structures pour garantir la solidité, 
                    la durabilité et la sécurité de chaque bâtiment, en respectant les normes et réglementations 
                    en vigueur.
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('images/dimensionnement.jpeg') }}" alt="Dimensionnement de structure" class="img-fluid rounded shadow service-image">
        </div>
    </div>

    <hr class="my-5">

    <div class="row g-5">
        <div class="col-md-6 d-flex align-items-center order-md-2">
            <div>
                <h3 class="fw-bold text-primary-orange">Structures métalliques</h3>
                <p class="text-muted">
                    Conception, fabrication et montage de charpentes et de structures métalliques pour tous types de bâtiments. 
                    Nous garantissons une solution légère, résistante et rapide à mettre en œuvre.
                </p>
            </div>
        </div>
        <div class="col-md-6 order-md-1">
            <img src="{{ asset('images/structures-metalliques.jpeg') }}" alt="Structures métalliques" class="img-fluid rounded shadow service-image">
        </div>
    </div>

    <hr class="my-5">

    <div class="row g-5">
        <div class="col-md-6 d-flex align-items-center">
            <div>
                <h3 class="fw-bold text-primary-orange">Réalisation</h3>
                <p class="text-muted">
                    L'exécution de vos projets BTP de la fondation aux finitions. Nos équipes qualifiées, 
                    équipées de technologies modernes, travaillent avec méthode pour transformer vos plans en réalité.
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('images/realisation-chantier.jpeg') }}" alt="Réalisation de projets" class="img-fluid rounded shadow service-image">
        </div>
    </div>

    <hr class="my-5">

    <div class="row g-5">
        <div class="col-md-6 d-flex align-items-center order-md-2">
            <div>
                <h3 class="fw-bold text-primary-orange">Conseils</h3>
                <p class="text-muted">
                    Nous offrons un conseil stratégique et une expertise technique pour optimiser la gestion de vos projets. 
                    Nous vous aidons à faire les meilleurs choix pour un résultat optimal et maîtrisé.
                </p>
            </div>
        </div>
        <div class="col-md-6 order-md-1">
            <img src="{{ asset('images/conseil-services.jpeg') }}" alt="Conseils" class="img-fluid rounded shadow service-image">
        </div>
    </div>

    <hr class="my-5">

    <div class="row g-5">
        <div class="col-md-6 d-flex align-items-center">
            <div>
                <h3 class="fw-bold text-primary-orange">Suivi des travaux</h3>
                <p class="text-muted">
                    Un accompagnement complet et une supervision rigoureuse sur site pour s'assurer 
                    que chaque phase du projet est conforme aux plans, au budget et aux délais convenus.
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('images/suivi-travaux.jpeg') }}" alt="Suivi des travaux" class="img-fluid rounded shadow service-image">
        </div>
    </div>

    <hr class="my-5">

    <div class="row g-5">
        <div class="col-md-6 d-flex align-items-center order-md-2">
            <div>
                <h3 class="fw-bold text-primary-orange">Formations en DAO</h3>
                <p class="text-muted">
                    Pour les professionnels et les étudiants, nous proposons des formations en DAO 
                    (Dessin Assisté par Ordinateur) pour maîtriser les logiciels essentiels de l'industrie. 
                    Devenez un expert en conception et en modélisation.
                </p>
            </div>
        </div>
        <div class="col-md-6 order-md-1">
            <img src="{{ asset('images/formation-services.jpeg') }}" alt="Formations en DAO" class="img-fluid rounded shadow service-image">
        </div>
    </div>
</section>

@endsection