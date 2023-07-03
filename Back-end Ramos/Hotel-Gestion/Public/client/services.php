
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.min.js">

<title>services</title>

<body style="background: #eeeeee; min-height: 390px;">

<!-- navbar Start -->

<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-transparent py-0">
    <div class="container-fluid">
        <button class="navbar-toggler "
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarToggler"
                aria-expanded="false"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <a href="navbar.php" class="navbar-brand ">
            <img src="logo.png" class="rounded-circle" alt="" width="60px" height="60px">
        </a>

        <div class="collapse navbar-collapse " id="navbarToggler">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 " style="margin-left: 15%">
                <li class="nav-item fw-bolder">
                    <a href="home.php" class="nav-link ">Accueil</a>
                </li>
                <!--<li class="nav-item fw-bolder">
                    <a href="reservation.php" class="nav-link active">Reservation</a>
                </li>-->
                <li class="nav-item">
                    <a href="tarifs_chambres.php" class="nav-link fw-bolder">Tarifs chambres</a>
                </li>
                <li class="nav-item">
                    <a href="services.php" class="nav-link active fw-bolder">Services</a>
                </li>
                <li class="nav-item">
                    <a href="contactez_nous.php" class="nav-link fw-bolder">Contactez-nous</a>
                </li>
            </ul>
            <form class="d-flex">
                <input type="search" class="form-control me-2" placeholder="Search">
                <button class="btn btn-outline-info type="submit">Search</button>
            </form>

            <ul class="navbar me-0 mb-2 mb-lg-0">
                <li class="nav-item list-unstyled">
                    <a href="connexion.php" class="btn btn-warning">Connexion</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- navbar End -->

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" >
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://github.com/Fabricejor/Gestion-des-activit-s-d-un-hotel/blob/main/images/service%20balade%20chameau.jpg?raw=true" class="d-block" style="width: 100%; height: 75%" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Balade à dos de chameau</h5>
                <p>Expérience unique et exotique qui permet de découvrir le paysage et la culture d'une manière différente.</p>
            </div>
        </div>
        <div class="carousel-item">
            <div class="carousel-caption d-none d-md-block">
                <h5>Balade en quad</h5>
                <p> L'hôtel propose des quads à louer, ainsi que des circuits ou des parcours spécialement conçus pour cette activité.</p>
            </div>
            <img src="https://github.com/Fabricejor/Gestion-des-activit-s-d-un-hotel/blob/main/images/service%20quad%20portrait.jpg?raw=true" class="d-block " style="width: 100%; height: 75%" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://github.com/Fabricejor/Gestion-des-activit-s-d-un-hotel/blob/main/images/service%20restaurant%202.jpg?raw=true" class="d-block" style="width: 100%; height: 75%" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Restaurant</h5>
                <p>L'hotel offre différents types de menus, allant des plats locaux et régionaux aux cuisines internationales, afin de satisfaire les goûts et les préférences de tous les clients.
                </p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<section class="container mt-5" >
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4
    mx-auto text-center">
        <h1 class="display-4 text-info fw-bold">Nos services à corniche hotel</h1>
        <p class="lead">
            Ne ratez pas nos meilleurs services à Corniche Hotel,
            Beaucoup d'endroits excitants et iconiques à decouvrir.
            Explorerz et decouvrez la culture de la region à dos de chameau.
            Profitez d'une aventure excitante en quad (véhicule tout-terrain) pendant votre séjour.
            Le service de restaurant de l'hôtel offre aux clients une expérience culinaire pratique et agréable, avec une variété de plats et de boissons proposés.
        </p>
    </div>
</section>

<section id="create-head-section" class="bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1 class="display-4 text-white fw-bold">Restauration</h1>
                <p class="lead text-dark fw-bold">
                    Le service de restaurant inclus différents moments de repas, tels que le petit-déjeuner, le déjeuner et le dîner.
                </p>
                <a href="#" class="btn btn-outline-light">Voir encore plus</a>
            </div>
        </div>
    </div>
</section>

<section id="explore-section" class="bg-light text-muted py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="https://github.com/Fabricejor/Gestion-des-activit-s-d-un-hotel/blob/main/images/service%20restaurant.jpg?raw=true" alt=""
                class="img-fluid mb-3 rounded-circle">
            </div>
            <div class="col-md-6">
                <h3>Explorer Restaurant</h3>
                <p>
                    Nous vous proposons des restaurants spécialisés, tels que des restaurants gastronomiques, des restaurants de fruits de mer ou des restaurants avec des options végétariennes ou végétaliennes.                </p>
                <div class="d-flex">
                    <div class="p-4 align-self-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                        </svg>
                    </div>
                    <div class="p-4 align-self-end">
                        Nous vous proposons des sélections de vins et de boissons pour accompagner les repas.
                    </div>
                </div>
                <div class="d-flex">
                    <div class="p-4 align-self-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                        </svg>
                    </div>
                    <div class="p-4 align-self-end">
                        Nous vous offrons des services de restauration en chambre, permettant aux clients de profiter d'un repas dans l'intimité de leur chambre.
                    </div>
                </div>
                <div class="d-flex">
                    <div class="p-4 align-self-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                        </svg>
                    </div>
                    <div class="p-4 align-self-end">
                        Les restaurants de l'hôtel sont gérés par des chefs et du personnel qualifiés, qui mettent l'accent sur la qualité des ingrédients, la préparation soignée des plats et un service attentif.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="create-head-section" class="bg-danger">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1 class="display-4 text-white fw-bold">Balade à dos de chameau</h1>
                <p class="lead text-dark fw-bold">
                    Que ce soit dans le désert, dans des oasis ou dans d'autres régions où les chameaux sont utilisés comme moyen de transport traditionnel, cette activité offre une connexion avec la nature et une immersion dans un mode de vie ancestral.</p>
                <a href="#" class="btn btn-outline-light">Voir encore plus</a>
            </div>
        </div>
    </div>
</section>

<section id="explore-section" class="bg-light text-muted py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Explorer Balade à dos de chameau</h3>
                <p>
                    Les chameaux, connus pour leur résistance et leur adaptabilité aux terrains arides, offrent une façon tranquille et apaisante de se déplacer, permettant aux participants d'apprécier le paysage et de se détendre au rythme tranquille de ces animaux majestueux.                <div class="d-flex">
                    <div class="p-4 align-self-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                        </svg>
                    </div>
                    <div class="p-4 align-self-end">
                        La durée d'une balade à chameau peut varier, allant d'une heure à plusieurs jours, en fonction de l'itinéraire choisi.                    </div>
                </div>
                <div class="d-flex">
                    <div class="p-4 align-self-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                        </svg>
                    </div>
                    <div class="p-4 align-self-end">
                        Les participants peuvent observer les panoramas spectaculaires, les dunes de sable, les montagnes, les oasis ou d'autres sites naturels emblématiques de la région.
                    </div>
                </div>
                <div class="d-flex">
                    <div class="p-4 align-self-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                        </svg>
                    </div>
                    <div class="p-4 align-self-end">
                        Incluent également des arrêts pour des pauses thé, des repas traditionnels ou des nuits en campement bédouin, offrant ainsi une expérience immersive complète.                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="https://github.com/Fabricejor/Gestion-des-activit-s-d-un-hotel/blob/main/images/service%20balade%20chameau%20portrait.jpg?raw=true" alt=""
                     class="img-fluid mb-3 rounded-circle">
            </div>
        </div>
    </div>
</section>

<section id="create-head-section" class="bg-success">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1 class="display-4 text-white fw-bold">Balade en quad</h1>
                <p class="lead text-dark fw-bold">
                    Le service de quad offre aux clients une expérience d'aventure en plein air en leur permettant de louer des quads et de partir à la découverte de paysages spectaculaires.                </p>
                <a href="#" class="btn btn-outline-light">Voir encore plus</a>
            </div>
        </div>
    </div>
</section>

<section id="explore-section" class="bg-light text-muted py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="https://github.com/Fabricejor/Gestion-des-activit-s-d-un-hotel/blob/main/images/service%20quad.jpg?raw=true" alt=""
                     class="img-fluid mb-3 rounded-circle">
            </div>
            <div class="col-md-6">
                <h3>Explorer balade en quad</h3>
                <p>
                    Nous vous proposons là une activité passionnante pour les amateurs de sensations fortes et les voyageurs qui souhaitent découvrir leur environnement d'une manière unique et excitante.
                </p>
                <div class="d-flex">
                    <div class="p-4 align-self-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                        </svg>
                    </div>
                    <div class="p-4 align-self-end">
                        L'hôtel propose des quads à louer, ainsi que des circuits ou des parcours spécialement conçus pour cette activité.                     </div>
                </div>
                <div class="d-flex">
                    <div class="p-4 align-self-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                        </svg>
                    </div>
                    <div class="p-4 align-self-end">
                        Les clients peuvent choisir parmi une gamme de quads adaptés à différents niveaux d'expérience et de compétences.                     </div>
                </div>
                <div class="d-flex">
                    <div class="p-4 align-self-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                        </svg>
                    </div>
                    <div class="p-4 align-self-end">
                        Des équipements de sécurité tels que des casques et des protections sont également fournis pour assurer la sécurité des participants.                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- footer start -->
<footer>
    <nav class="navbar navbar-dark bg-dark"  position-absolute bottom-0 w-100>
        <div class="container-fluid text-white text-decoration-none">
            <p>&copy; 2020-2023 RSN, Inc. &middot;
                <a href="#" class="text-decoration-none text-white">Privacy</a>
                &middot;<a href="#" class="text-decoration-none text-white">Terms</a>
            </p>

            <p>
                <a href="#" class="text-decoration-none text-white">Retouner en haut de page</a>
            </p>
            <div class="footer-social">
                <span>Suivez-nous sur:</span>
                <a href="#" class="text-warning">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                    </svg>
                </a>

                <a href="#" class="text-warning">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                    </svg>
                </a>

                <a href="#" class="text-warning">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                    </svg>
                </a>

                <a href="#" class="text-warning">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                        <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                    </svg>
                </a>

                <a href="#" class="text-warning">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                        <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z"/>
                    </svg>
                </a>
            </div>
        </div>
    </nav>
</footer>
<!-- footer end -->
</body>

