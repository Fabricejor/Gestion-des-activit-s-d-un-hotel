<title>gerer client</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

<link rel="stylesheet" href="receptioniste.css">
<body>
<style>
    .customcssdropdown{
        width: 300px;
        margin-top: -8px;
    }

    .customcssforprofile{
        margin-top: -8px;
    }

    .btn-custom:hover, .btn-custom:focus, .btn-custom:active,
    .dropdown-toggle.btn-custom{
        background-color: rgb(157,76,245);
        color: white;
        border: rgb(157, 76, 245);
    }
</style>
<!-- Nav Section Starts-->
<nav class="navbar justify-content-between fixed-top">
    <a href="gererClient.php" class="navbar-brand ms-2 customsizelogo">
        <img src="logo.png" alt=""
             width="50" height="50">
    </a>

    <div class="customdivforicons ms-auto">
        <ul class="list-unstyled">
            <li class="nav-item">
                <a class="fs-2 text-decoration-none"
                   href="#" style="color: #293042;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" class="bi bi-envelope" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                    </svg>
                </a>
                <span class="badge badge-notify
                    rounded-circle">3</span>
            </li>
        </ul>
        <ul class="list-unstyled">
            <li class="nav-item dropdown">
                <a href="#" class="fs-2 text-decoration-none"
                   data-toggle="dropdown" style="color: #293042;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                    </svg>
                </a>
                <span class="badge badge-notify rounded-circle">2</span>
                <div class="dropdown-menu dropdown-menu-sm
                    dropdown-menu-end me-1 shadow-lg p-3 mb-5 rounded
                    customcssdropdown">
                    <div class="dropdown-menu-header
                    text-info text-center fw-bold">
                        2 nouvelles notifications
                    </div>
                    <a href="#" class="dropdown-item text-wrap">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                        </svg>
                        <span class="text-success fw-bold">
                            Demande de logement
                        </span><br>
                        Je voudrais savoir s'il vous reste des chambres de luxes.<br>
                        <span class="text-muted">il y'a 2 heures</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item text-wrap">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                        </svg>
                        <span class="text-success fw-bold">
                            Demande de stage
                        </span><br>
                        Bonjour! Je voudrais travailler dans votre hotel voici mon cv.<br>
                        <span class="text-muted">il y'a 9 heures</span>
                    </a>
                </div>
            </li>
        </ul>
    </div>
    <ul class="list-unstyled">
        <li class="nav-item dropdown">
            <a href="#" class="nav-link" data-toggle="dropdown">
                    <span>
                        <img src="user.png" alt=""
                             height="50" width="50" class="rounded-circle
                             z-depth-0 customize">
                    </span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg
                dropdown-menu-end me-1 shadow-lg p-3 mb-5
                rounded customcssforprofile">
                <div>
                    <a class="btn btn-custom dropdown-imte" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person me-1 mb-1" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                        </svg>Profile
                    </a>
                </div>
                <div>
                    <a class="btn btn-custom dropdown-imte" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pie-chart me-1 mb-1" viewBox="0 0 16 16">
                            <path d="M7.5 1.018a7 7 0 0 0-4.79 11.566L7.5 7.793V1.018zm1 0V7.5h6.482A7.001 7.001 0 0 0 8.5 1.018zM14.982 8.5H8.207l-4.79 4.79A7 7 0 0 0 14.982 8.5zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                        </svg>Données
                    </a>
                </div>
                <div class="dropdown-divider"></div>
                <a href="#" class="btn btn-custom dropdown-item">
                    paramètres &amp; confidentialité
                </a>
                <a href="#" class="btn btn-custom dropdown-item">
                    Deconnexion
                </a>
            </div>
        </li>
    </ul>
</nav>
<!-- Nav Section Ends -->

<!-- Sidemenu Section Starts -->
<input type="checkbox" id="check">
<div class="sidebar">
    <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>
    </label>

    <div class="mt-5">
        <a href="receptioniste.php">
            <i class="fas fa-desktop" style="color:rgb(4,87,155);"></i>
            <span>Reservations</span>
        </a>
        <a href="gererClient.php">
            <i class="fas fa-table" style="color:rgb(187,255,0);"></i>
            <span>Clients</span>
        </a>
        <a href="genererFacture.php">
            <i class="fas fa-users" style="color:rgb(255,115,0);"></i>
            <span>Factures</span>
        </a>
        <a href="#">
            <i class="fas fa-power-off" style="color: red;"></i>
            <span>Deconnexion</span>
        </a>
    </div>
</div>
<!-- Sidemenu Section Ends -->

<!-- Main Section Starts -->
<div class="content" style="overflow-x: hidden">

    <hr>

        <div class="col-sm-3 ms-3">
            <div class="card bg-primary">
                <div class="card-body text-white">
                    <div class="column">
                        <i class="fas fa-users fa-1x me-3"></i>
                        <label for="" class="text-white fs-5">3
                            <label for="" class="fs-5 text-white">Clients</label>
                        </label>
                    </div>
                </div>
            </div>
        </div>


        <hr>

    <!-- Add new Modal Starts-->

    <div class="modal fade" id="addNewModal" tabindex="-1"
         aria-labelledby="addNewModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success text-white fw-bold">
                    <h5 class="modal-title">Ajouter dans client</h5>
                    <button type="button" class="btn-close"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-success">
                    <form action="">
                        <div class="mb-3">
                            <label for="" class="form-label">Prenom</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Nom</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Sexe</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Couriel</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Login</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Confirmer Mot de passe</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Telephone</label>
                            <input type="password" class="form-control">
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

                        <div class="d-grid">
                            <button class="btn btn-success fw-bold text-white"
                                    type="submit">
                                <i class="fas fa-plus-circle">Creer</i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Add new Modal Ends-->


    <!-- Client list table section starts -->
    <div class="card text-center ms-3 me-2">
        <div class="card-body">
            <p class="card-text">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Prenom</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Sexe</th>
                        <th scope="col">Email</th>
                        <th scope="col">Login</th>
                        <th scope="col">Mot de passe</th>
                        <th scope="col">Telephone</th>
                        <th scope="col">Nationalité</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Ndeye Fatou Sene</td>
                        <td>Toure</td>
                        <td>F</td>
                        <td>ndeyefatou@example.com</td>
                        <td>nfstlog</td>
                        <td>passer</td>
                        <td>770000000</td>
                        <td>Senegalaise</td>
                        <td>
                            <a href="#">
                                <i class="fas fa-edit text-primary"></i>
                            </a> /
                            <a href="#">
                                <i class="fas fa-trash-alt text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Aminatou Bintou Wahab</td>
                        <td>Ndiaye</td>
                        <td>F</td>
                        <td>aminabintou@example.com</td>
                        <td>abwnlog</td>
                        <td>passer</td>
                        <td>770000000</td>
                        <td>Senegalaise</td>
                        <td>
                            <a href="#">
                                <i class="fas fa-edit text-primary"></i>
                            </a> /
                            <a href="#">
                                <i class="fas fa-trash-alt text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>William</td>
                        <td>Sene</td>
                        <td>M</td>
                        <td>williamsene@example.com</td>
                        <td>wslog</td>
                        <td>passer</td>
                        <td>770000000</td>
                        <td>Senegalaise</td>
                        <td>
                            <a href="#">
                                <i class="fas fa-edit text-primary"></i>
                            </a> /
                            <a href="#">
                                <i class="fas fa-trash-alt text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    </tr>
                    </tbody>
                </table>
            </div>
            </p>
        </div>

    </div>
    <!-- Clients list table section ends -->

</div>
<!-- Main Section Ends -->


</body>

