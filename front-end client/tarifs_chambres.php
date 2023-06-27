
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.min.js">

<link href="home.css" rel="stylesheet">
<title>tarifs chambres</title>

<body style="background: #eeeeee">

<!-- Modal inscription Starts-->

<div class="modal fade" id="inscription" tabindex="-1"
     aria-labelledby="myModal" aria-hiden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h5 class="modal-title" id="myModalLabel">Inscrivez-vous</h5>
                <button type="button" class="btn-close"
                        data-bs-dismiss="modal" aria-label="close"></button>
            </div>
            <div class="modal-body">
                <form action="home.php">
                    <div class="mb-3">
                        <label for="firstname" class="form-label"
                               aria-describedby="firstnameHelp">Prenom</label>
                        <input id="firstname" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="lastname" class="form-label"
                               aria-describedby="lastnameHelp">Nom</label>
                        <input id="lastname" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="tel" class="form-label"
                               aria-describedby="telHelp">Telephone</label>
                        <input id="tel" type="number" class="form-control">
                    </div>
                    <div class="mb-3">
                        <select class="form-select"
                                aria-label="Nationnalité">
                            <option>Selectionnez-votre nationalité!</option>
                            <option value="AFGHAN">AFGHAN</option>
                            <option value="ALBANIAN">ALBANIAN</option>
                            <option value="ALGERIAN">ALGERIAN</option>
                            <option value="AMERICAN">AMERICAN</option>
                            <option value="ANDORRAN">ANDORRAN</option>
                            <option value="ANGOLAN">ANGOLAN</option>
                            <option value="ANTIGUANS">ANTIGUANS</option>
                            <option value="ARGENTINEAN">ARGENTINEAN</option>
                            <option value="ARMENIAN">ARMENIAN</option>
                            <option value="AUSTRALIAN">AUSTRALIAN</option>
                            <option value="AUSTRIAN">AUSTRIAN</option>
                            <option value="AZERBAIJANI">AZERBAIJANI</option>
                            <option value="BAHAMIAN">BAHAMIAN</option>
                            <option value="BAHRAINI">BAHRAINI</option>
                            <option value="BANGLADESHI">BANGLADESHI</option>
                            <option value="BARBADIAN">BARBADIAN</option>
                            <option value="BARBUDANS">BARBUDANS</option>
                            <option value="BATSWANA">BATSWANA</option>
                            <option value="BELARUSIAN">BELARUSIAN</option>
                            <option value="BELGIAN">BELGIAN</option>
                            <option value="BELIZEAN">BELIZEAN</option>
                            <option value="BENINESE">BENINESE</option>
                            <option value="BHUTANESE">BHUTANESE</option>
                            <option value="BOLIVIAN">BOLIVIAN</option>
                            <option value="BOSNIAN">BOSNIAN</option>
                            <option value="BRAZILIAN">BRAZILIAN</option>
                            <option value="BRITISH">BRITISH</option>
                            <option value="BRUNEIAN">BRUNEIAN</option>
                            <option value="BULGARIAN">BULGARIAN</option>
                            <option value="BURKINABE">BURKINABE</option>
                            <option value="BURMESE">BURMESE</option>
                            <option value="BURUNDIAN">BURUNDIAN</option>
                            <option value="CAMBODIAN">CAMBODIAN</option>
                            <option value="CAMEROONIAN">CAMEROONIAN</option>
                            <option value="CANADIAN">CANADIAN</option>
                            <option value="CAPE VERDEAN">CAPE VERDEAN</option>
                            <option value="CENTRAL AFRICAN">CENTRAL AFRICAN</option>
                            <option value="CHADIAN">CHADIAN</option>
                            <option value="CHILEAN">CHILEAN</option>
                            <option value="CHINESE">CHINESE</option>
                            <option value="COLOMBIAN">COLOMBIAN</option>
                            <option value="COMORAN">COMORAN</option>
                            <option value="CONGOLESE">CONGOLESE</option>
                            <option value="COSTA RICAN">COSTA RICAN</option>
                            <option value="CROATIAN">CROATIAN</option>
                            <option value="CUBAN">CUBAN</option>
                            <option value="CYPRIOT">CYPRIOT</option>
                            <option value="CZECH">CZECH</option>
                            <option value="DANISH">DANISH</option>
                            <option value="DJIBOUTI">DJIBOUTI</option>
                            <option value="DOMINICAN">DOMINICAN</option>
                            <option value="DUTCH">DUTCH</option>
                            <option value="EAST TIMORESE">EAST TIMORESE</option>
                            <option value="ECUADOREAN">ECUADOREAN</option>
                            <option value="EGYPTIAN">EGYPTIAN</option>
                            <option value="EMIRIAN">EMIRIAN</option>
                            <option value="EQUATORIAL GUINEAN">EQUATORIAL GUINEAN
                            </option>
                            <option value="ERITREAN">ERITREAN</option>
                            <option value="ESTONIAN">ESTONIAN</option>
                            <option value="ETHIOPIAN">ETHIOPIAN</option>
                            <option value="FIJIAN">FIJIAN</option>
                            <option value="FILIPINO">FILIPINO</option>
                            <option value="FINNISH">FINNISH</option>
                            <option value="FRENCH">FRENCH</option>
                            <option value="GABONESE">GABONESE</option>
                            <option value="GAMBIAN">GAMBIAN</option>
                            <option value="GEORGIAN">GEORGIAN</option>
                            <option value="GERMAN">GERMAN</option>
                            <option value="GHANAIAN">GHANAIAN</option>
                            <option value="GREEK">GREEK</option>
                            <option value="GRENADIAN">GRENADIAN</option>
                            <option value="GUATEMALAN">GUATEMALAN</option>
                            <option value="GUINEA-BISSAUAN">GUINEA-BISSAUAN</option>
                            <option value="GUINEAN">GUINEAN</option>
                            <option value="GUYANESE">GUYANESE</option>
                            <option value="HAITIAN">HAITIAN</option>
                            <option value="HERZEGOVINIAN">HERZEGOVINIAN</option>
                            <option value="HONDURAN">HONDURAN</option>
                            <option value="HUNGARIAN">HUNGARIAN</option>
                            <option value="ICELANDER">ICELANDER</option>
                            <option value="INDIAN">INDIAN</option>
                            <option value="INDONESIAN">INDONESIAN</option>
                            <option value="IRANIAN">IRANIAN</option>
                            <option value="IRAQI">IRAQI</option>
                            <option value="IRISH">IRISH</option>
                            <option value="ISRAESLI">ISRAELI</option>
                            <option value="ITALIAN">ITALIAN</option>
                            <option value="IVORIAN">IVORIAN</option>
                            <option value="JAMAICAN">JAMAICAN</option>
                            <option value="JAPANESE">JAPANESE</option>
                            <option value="JORDANIAN">JORDANIAN</option>
                            <option value="KAZAKHSTANI">KAZAKHSTANI</option>
                            <option value="KENYAN">KENYAN</option>
                            <option value="KITTIAN AND NEVISIAN">KITTIAN AND NEVISIAN
                            </option>
                            <option value="KUWAITI">KUWAITI</option>
                            <option value="KYRGYZ">KYRGYZ</option>
                            <option value="LAOTIAN">LAOTIAN</option>
                            <option value="LATVIAN">LATVIAN</option>
                            <option value="LEBANESE">LEBANESE</option>
                            <option value="LIBERIAN">LIBERIAN</option>
                            <option value="LIBYAN">LIBYAN</option>
                            <option value="LIECHTENSTEINER">LIECHTENSTEINER</option>
                            <option value="LITHUANIAN">LITHUANIAN</option>
                            <option value="LUXEMBOURGER">LUXEMBOURGER</option>
                            <option value="MACEDONIAN">MACEDONIAN</option>
                            <option value="MALAGASY">MALAGASY</option>
                            <option value="MALAWIAN">MALAWIAN</option>
                            <option value="MALAYSIAN">MALAYSIAN</option>
                            <option value="MALDIVAN">MALDIVAN</option>
                            <option value="MALIAN">MALIAN</option>
                            <option value="MALTESE">MALTESE</option>
                            <option value="MARSHALLESE">MARSHALLESE</option>
                            <option value="MAURITANIAN">MAURITANIAN</option>
                            <option value="MAURITIAN">MAURITIAN</option>
                            <option value="MEXICAN">MEXICAN</option>
                            <option value="MICRONESIAN">MICRONESIAN</option>
                            <option value="MOLDOVAN">MOLDOVAN</option>
                            <option value="MONACAN">MONACAN</option>
                            <option value="MONGOLIAN">MONGOLIAN</option>
                            <option value="MOROCCAN">MOROCCAN</option>
                            <option value="MOSOTHO">MOSOTHO</option>
                            <option value="MOTSWANA">MOTSWANA</option>
                            <option value="MOZAMBICAN">MOZAMBICAN</option>
                            <option value="NAMIBIAN">NAMIBIAN</option>
                            <option value="NAURUAN">NAURUAN</option>
                            <option value="NEPALESE">NEPALESE</option>
                            <option value="NEW ZEALANDER">NEW ZEALANDER</option>
                            <option value="NI-VANUATU">NI-VANUATU</option>
                            <option value="NICARAGUAN">NICARAGUAN</option>
                            <option value="NIGERIEN">NIGERIEN</option>
                            <option value="NORTH KOREAN">NORTH KOREAN</option>
                            <option value="NORTHERN IRISH">NORTHERN IRISH</option>
                            <option value="NORWEGIAN">NORWEGIAN</option>
                            <option value="OMANI">OMANI</option>
                            <option value="PAKISTANI">PAKISTANI</option>
                            <option value="PALAUAN">PALAUAN</option>
                            <option value="PANAMANIAN">PANAMANIAN</option>
                            <option value="PAPUA NEW GUINEAN">PAPUA NEW GUINEAN</option>
                            <option value="PARAGUAYAN">PARAGUAYAN</option>
                            <option value="PERUVIAN">PERUVIAN</option>
                            <option value="POLISH">POLISH</option>
                            <option value="PORTUGUESE">PORTUGUESE</option>
                            <option value="QATARI">QATARI</option>
                            <option value="ROMANIAN">ROMANIAN</option>
                            <option value="RUSSIAN">RUSSIAN</option>
                            <option value="RWANDAN">RWANDAN</option>
                            <option value="SAINT LUCIAN">SAINT LUCIAN</option>
                            <option value="SALVADORAN">SALVADORAN</option>
                            <option value="SAMOAN">SAMOAN</option>
                            <option value="SAN MARINESE">SAN MARINESE</option>
                            <option value="SAO TOMEAN">SAO TOMEAN</option>
                            <option value="SAUDI">SAUDI</option>
                            <option value="SCOTTISH">SCOTTISH</option>
                            <option value="SENEGALESE">SENEGALESE</option>
                            <option value="SERBIAN">SERBIAN</option>
                            <option value="SEYCHELLOIS">SEYCHELLOIS</option>
                            <option value="SIERRA LEONEAN">SIERRA LEONEAN</option>
                            <option value="SINGAPOREAN">SINGAPOREAN</option>
                            <option value="SLOVAKIAN">SLOVAKIAN</option>
                            <option value="SLOVENIAN">SLOVENIAN</option>
                            <option value="SOLOMON ISLANDER">SOLOMON ISLANDER</option>
                            <option value="SOMALI">SOMALI</option>
                            <option value="SOUTH AFRICAN">SOUTH AFRICAN</option>
                            <option value="SOUTH KOREAN">SOUTH KOREAN</option>
                            <option value="SPANISH">SPANISH</option>
                            <option value="SRI LANKAN">SRI LANKAN</option>
                            <option value="SUDANESE">SUDANESE</option>
                            <option value="SURINAMER">SURINAMER</option>
                            <option value="SWAZI">SWAZI</option>
                            <option value="SWEDISH">SWEDISH</option>
                            <option value="SWISS">SWISS</option>
                            <option value="SYRIAN">SYRIAN</option>
                            <option value="TAIWANESE">TAIWANESE</option>
                            <option value="TAJIK">TAJIK</option>
                            <option value="TANZANIAN">TANZANIAN</option>
                            <option value="THAI">THAI</option>
                            <option value="TOGOLESE">TOGOLESE</option>
                            <option value="TONGAN">TONGAN</option>
                            <option value="TRINIDADIAN OR TOBAGONIAN">TRINIDADIAN OR
                                TOBAGONIAN</option>
                            <option value="TUNISIAN">TUNISIAN</option>
                            <option value="TURKISH">TURKISH</option>
                            <option value="TUVALUAN">TUVALUAN</option>
                            <option value="UGANDAN">UGANDAN</option>
                            <option value="UKRAINIAN">UKRAINIAN</option>
                            <option value="URUGUAYAN">URUGUAYAN</option>
                            <option value="UZBEKISTANI">Uzbekistani</option>
                            <option value="VENEZUELAN">VENEZUELAN</option>
                            <option value="VIETNAMESE">VIETNAMESE</option>
                            <option value="WELSH">WELSH</option>
                            <option value="YEMENITE">YEMENITE</option>
                            <option value="ZAMBIAN">ZAMBIAN</option>
                            <option value="ZIMBABWEAN">ZIMBABWEAN</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label"
                               aria-describedby="emailHelp">Email</label>
                        <input id="email" type="email" class="form-control">
                        <div class="form-text" id="infoHelp">
                            Nous n'allons partager votre email à personne.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label"
                               aria-describedby="passwordHelp">Mot de passe</label>
                        <input id="password" type="password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="confirmpassword" class="form-label"
                               aria-describedby="passwordHelp">Confirmez le mot de passe</label>
                        <input id="confirmpassword" type="password" class="form-control">
                    </div>

                    <div class="mb-3">
                        <a href="#" class="form-link"
                           aria-describedby="conditionsHelp">Lisez les conditions générales!</a>
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="checkbox">
                        <label for="checkbox" class="form-check-label">Je suis d'accord avec les conditions générales.</label>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-danger" type="button"
                                data-bs-dismiss="modal">Fermer</button>
                        <button class="btn btn-info" type="submit">S'inscrire</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal inscription Ends-->

<!-- Modal Connexion Starts-->

<div class="modal fade" id="myModal" tabindex="-1"
     aria-labelledby="myModalLabel" aria-hiden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h5 class="modal-title" id="myModalLabel">Connectez-vous pour faire une reservation</h5>
                <button type="button" class="btn-close"
                        data-bs-dismiss="modal" aria-label="close"></button>
            </div>
            <div class="modal-body">
                <form action="home.php">
                    <div class="mb-3">
                        <label for="email" class="form-label"
                               aria-describedby="emailHelp">Email</label>
                        <input id="email" type="email" class="form-control">
                        <div class="form-text" id="infoHelp">
                            Nous n'allons partager votre email à personne.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label"
                               aria-describedby="passwordHelp">Mot de passe</label>
                        <input id="password" type="password" class="form-control">
                    </div>

                    <div class="mb-3">
                        <a href="#" class="form-link"
                           aria-describedby="mdpHelp">Mot de passe oublié?</a>
                    </div>

                    <div class="modal-footer">
                        <a href="#" class="btn btn-danger" data-bs-dismiss="modal" aria-label="inscription"
                           data-bs-toggle="modal" data-bs-target="#inscription"
                        >Inscription</a>
                        <button class="btn btn-info" type="submit">Se connecter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Connexion Ends-->

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
                    <a href="tarifs_chambres.php" class="nav-link active fw-bolder">Tarifs chambres</a>
                </li>
                <li class="nav-item">
                    <a href="services.php" class="nav-link fw-bolder">Services</a>
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
                    <a href="#" class="btn btn-warning"
                       data-bs-toggle="modal" data-bs-target="#myModal">Connexion</a>
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
            <img src="https://github.com/Fabricejor/Gestion-des-activit-s-d-un-hotel/blob/main/images/Chambre%20de%20luxe.jpg?raw=true" class="d-block" style="width: 100%; height: 75%" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Tarifs chambres et offres</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <div class="carousel-caption d-none d-md-block">
                <h5>Tarifs chambres et offres</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
            <img src="https://github.com/Fabricejor/Gestion-des-activit-s-d-un-hotel/blob/main/images/chambre%20famille.jpg?raw=true" class="d-block " style="width: 100%; height: 75%" alt="...">

        </div>
        <div class="carousel-item">
            <img src="https://github.com/Fabricejor/Gestion-des-activit-s-d-un-hotel/blob/main/images/chambre%20classique.jpg?raw=true" class="d-block" style="width: 100%; height: 75%" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Tarifs chambres et offres</h5>
                <p>Some representative placeholder content for the first slide.</p>
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

<section class="container mt-5" style="min-height: 390px;">
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
        <div class="col">
            <div class="card mb-4 border-0 shadow-lg">
                <img src="https://github.com/Fabricejor/Gestion-des-activit-s-d-un-hotel/blob/main/images/chambre%20classique.jpg?raw=true" class="card-img-top" alt="">
                <div class="card-header bg-warning">
                    <h4 class="my-0 fw-normal">Tarifs chambres classiques</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">
                        250000 <small class="text-muted">fcfa</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>lit queen-size</li>
                            <li>une à deux personnes</li>
                            <li>salle de bains privée</li>
                            <li>télévision, Wi-Fi, bureau et plus encore</li>
                        </ul>
                    <button type="button" class="w100 btn btn-lg
                    btn-info text-white fw-bold" data-bs-toggle="modal" data-bs-target="#myModal">
                        Reserver cette chambre Maintenant!
                    </button>
                </div>
            </div>

        </div>
        <div class="col">
            <div class="card mb-4 border-0 shadow-lg">
                <img src="https://github.com/Fabricejor/Gestion-des-activit-s-d-un-hotel/blob/main/images/chambre%20affaires.jpg?raw=true" class="card-img-top" alt="">
                <div class="card-header bg-warning">
                    <h4 class="my-0 fw-normal">Tarifs chambres d'affaires</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">
                        300000 <small class="text-muted">fcfa</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>grand bureau avec une chaise ergonomique</li>
                            <li>connexion Wi-Fi haut débit gratuite</li>
                            <li> prises électriques facilement accessibles</li>
                            <li>lit grande qualité et plus encore</li>
                        </ul>
                    <button type="button" class="w100 btn btn-lg
                    btn-info text-white fw-bold" data-bs-toggle="modal" data-bs-target="#myModal">
                        Reserver cette chambre Maintenant!
                    </button>
                </div>
            </div>

        </div>
        <div class="col">
            <div class="card mb-4 border-0 shadow-lg">
                <img src="https://github.com/Fabricejor/Gestion-des-activit-s-d-un-hotel/blob/main/images/Chambre%20de%20luxe.jpg?raw=true" class="card-img-top" alt="">
                <div class="card-header bg-warning">
                    <h4 class="my-0 fw-normal">Tarifs chambres de luxe</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">
                        500000 <small class="text-muted">fcfa</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Spacieuse + Espace de travail élégant</li>
                            <li>Lit king-size ou queen-size</li>
                            <li>Vue panoramique + Coin salon confortable</li>
                            <li>Salle de bains en marbre et plus encore</li>
                        </ul>
                    <button type="button" class="w100 btn btn-lg
                    btn-info text-white fw-bold" data-bs-toggle="modal" data-bs-target="#myModal">
                        Reserver cette chambre Maintenant!
                    </button>
                </div>
            </div>

        </div>
        <div class="col">
            <div class="card mb-4 border-0 shadow-lg">
                <img src="https://github.com/Fabricejor/Gestion-des-activit-s-d-un-hotel/blob/main/images/Chambre%20couple.jpg?raw=true" class="card-img-top" alt="">
                <div class="card-header bg-warning">
                    <h4 class="my-0 fw-normal">Tarifs chambres couples</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">
                        350000 <small class="text-muted">fcfa</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Lit king-size ou queen-size</li>
                            <li>Décoration romantique</li>
                            <li>Jacuzzi ou bain à remous</li>
                            <li>Balcon ou terrasse privée</li>
                        </ul>
                    <button type="button" class="w100 btn btn-lg
                    btn-info text-white fw-bold" data-bs-toggle="modal" data-bs-target="#myModal">
                        Reserver cette chambre Maintenant!
                    </button>
                </div>
            </div>

        </div>
        <div class="col">
            <div class="card mb-4 border-0 shadow-lg">
                <img src="https://github.com/Fabricejor/Gestion-des-activit-s-d-un-hotel/blob/main/images/Chambre%20Economique.jpg?raw=true" class="card-img-top" alt="">
                <div class="card-header bg-warning">
                    <h4 class="my-0 fw-normal">Tarifs chambres economiques</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">
                        200000 <small class="text-muted">fcfa</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Lit confortable + Décoration simple</li>
                            <li>Salle de bains privée</li>
                            <li>Bureau de travail</li>
                            <li>télévision, Wi-Fi, bureau et plus encore</li>
                        </ul>
                    <button type="button" class="w100 btn btn-lg
                    btn-info text-white fw-bold" data-bs-toggle="modal" data-bs-target="#myModal">
                        Reserver cette chambre Maintenant!
                    </button>
                </div>
            </div>

        </div>
        <div class="col">
            <div class="card mb-4 border-0 shadow-lg">
                <img src="https://github.com/Fabricejor/Gestion-des-activit-s-d-un-hotel/blob/main/images/chambre%20famille.jpg?raw=true" class="card-img-top" alt="">
                <div class="card-header bg-warning">
                    <h4 class="my-0 fw-normal">Tarifs chambre de famille</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">
                        275000 <small class="text-muted">fcfa</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>hambre spacieuse + Lits multiples </li>
                            <li>Décoration conviviale </li>
                            <li>salle de bains privée</li>
                            <li>Espace de rangement + Coin salon ou espace de jeu et plus encore</li>
                        </ul>
                    <button type="button" class="w100 btn btn-lg
                    btn-info text-white fw-bold" data-bs-toggle="modal" data-bs-target="#myModal">
                        Reserver cette chambre Maintenant!
                    </button>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- footer start -->
<footer class="bg-light text-center text-lg-start top-100 bottom-0 w-100">
    <nav class="navbar navbar-dark bg-dark mb-0 " >
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

