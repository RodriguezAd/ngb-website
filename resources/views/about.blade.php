@extends('app')

@section('content')

<div class="container-fluid bg-light py-5">
    <div class="row text-center">
        <div class="col-12">
            <h1 class="display-4 fw-bold text-primary-orange">À PROPOS DE NOUS</h1>
            <p class="lead text-muted">Découvrez notre histoire, notre vision et nos engagements.</p>
        </div>
    </div>
</div>

<section class="container my-5">
    <div class="row g-5">
        <div class="col-md-6 d-flex flex-column justify-content-center">
            <h2 class="display-5 fw-bold text-primary-orange">PRÉSENTATION DE L’ENTREPRISE</h2>
            <p class="lead text-muted mt-3">
                **NEW GENERATION OF BUILDERS (Ets NGB)** est une entreprise créée en 2016 par Gérard MEFACK, ingénieur des travaux de génie civil. 
                Basée à Mvog-Ada (Yaoundé), l’entreprise s’est spécialisée dans les travaux de génie civil, notamment dans le secteur du Bâtiment et des Travaux Publics (BTP).
            </p>
            <h3 class="fw-bold mt-4">Notre Vision</h3>
            <p class="text-muted">
                Chez NGB, notre slogan est : <br>
                <strong class="text-primary-orange">Qualité – Temps – Prix</strong><br>
                Nous sommes une entreprise ambitieuse et exigeante, qui accompagne ses clients depuis les études jusqu’à la réalisation complète de leurs projets.
            </p>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('images/about-banner.jpeg') }}" alt="Une équipe de construction en action" class="img-fluid rounded shadow">
        </div>
    </div>
</section>

<hr class="my-5">

<section class="container my-5">
    <div class="row g-5">
        <div class="col-md-4">
            <h3 class="fw-bold text-primary-orange">Domaines d’Expertise</h3>
            <ul class="list-unstyled text-muted">
                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Études architecturales</li>
                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Études techniques</li>
                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Études et réalisations</li>
                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Formation en DAO</li>
                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Conseil</li>
                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Maîtrise d’œuvre</li>
            </ul>
        </div>
        <div class="col-md-4">
            <h3 class="fw-bold text-primary-orange">Partenariats et Collaborations</h3>
            <p class="text-muted">
                Nous travaillons avec des clients privés ainsi qu’en consultation directe (gré à gré) avec des entreprises locales, ouvertes à la participation aux marchés publics et privés.
            </p>
            <h3 class="fw-bold text-primary-orange mt-4">Nos Engagements</h3>
            <p class="text-muted">
                Nous répondons à toutes vos demandes, quel que soit le mode de réalisation retenu :
            </p>
            <ul class="list-unstyled text-muted">
                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Entreprise générale</li>
                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Macro-lots</li>
                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Corps d’état séparés</li>
            </ul>
        </div>
        <div class="col-md-4">
            <h3 class="fw-bold text-primary-orange">Nos Équipes</h3>
            <p class="text-muted">
                Nous disposons de plusieurs équipes pluridisciplinaires composées de tous les corps de métier nécessaires à la bonne exécution des projets :
            </p>
            <ul class="list-unstyled text-muted">
                <li><i class="bi bi-gear-fill text-primary me-2"></i>Maçonnerie</li>
                <li><i class="bi bi-gear-fill text-primary me-2"></i>Plomberie</li>
                <li><i class="bi bi-gear-fill text-primary me-2"></i>Électricité</li>
                <li><i class="bi bi-gear-fill text-primary me-2"></i>Menuiserie (bois, alu et métallique)</li>
                <li><i class="bi bi-gear-fill text-primary me-2"></i>Carrelage</li>
                <li><i class="bi bi-gear-fill text-primary me-2"></i>Charpente et couverture</li>
            </ul>
        </div>
    </div>
</section>

<hr class="my-5">

<section class="container my-5">
    <div class="row g-5">
        <div class="col-md-6">
            <h3 class="fw-bold text-primary-orange">Nos Équipements</h3>
            <p class="text-muted">
                Nous possédons du matériel professionnel indispensable pour garantir la qualité des travaux réalisés, notamment :
            </p>
            <ul class="list-unstyled text-muted">
                <li><i class="bi bi-tools text-primary me-2"></i>03 vibreurs à béton (dont un électrique)</li>
                <li><i class="bi bi-tools text-primary me-2"></i>02 dames sauteuses</li>
                <li><i class="bi bi-tools text-primary me-2"></i>04 chignoles</li>
                <li><i class="bi bi-tools text-primary me-2"></i>01 bétonnière (en cours d’acquisition)</li>
                <li><i class="bi bi-tools text-primary me-2"></i>Divers petits outils techniques spécialisés</li>
            </ul>
        </div>
        <div class="col-md-6">
            <h3 class="fw-bold text-primary-orange">Nos Valeurs</h3>
            <p class="text-muted">
                Avec le temps et l’expérience, nous avons développé les qualités essentielles pour satisfaire notre clientèle :
            </p>
            <ul class="list-unstyled text-muted">
                <li><i class="bi bi-star-fill text-warning me-2"></i>Respect des exigences du client</li>
                <li><i class="bi bi-star-fill text-warning me-2"></i>Sens de la communication</li>
                <li><i class="bi bi-star-fill text-warning me-2"></i>Disponibilité</li>
                <li><i class="bi bi-star-fill text-warning me-2"></i>Respect des plannings et délais</li>
                <li><i class="bi bi-star-fill text-warning me-2"></i>Discrétion de nos équipes (tenues adaptées)</li>
                <li><i class="bi bi-star-fill text-warning me-2"></i>Compétences techniques dans l’exécution des travaux</li>
            </ul>
        </div>
    </div>
</section>

@endsection