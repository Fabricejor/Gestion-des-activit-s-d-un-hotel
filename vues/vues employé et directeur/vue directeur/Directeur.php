<title>directeur</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

<link rel="stylesheet" href="directeur.css">
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
    <a href="directeur.php" class="navbar-brand ms-2 customsizelogo">
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

<!-- Main Section Starts -->
<div class="content ms-0" style="overflow-x: hidden">
    <p class="mt-3 ps-3 pt-1 fw-light bg-info text-white">
        Main > Dashboard
    </p>


    <!-- Main top Section Starts -->

    <hr>

    <div class="row me-1" style="justify-content: center;
        justify-items: center;">
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

        <div class="col-sm-4 ms-3">
            <div class="card bg-danger">
                <div class="card-body text-white">
                    <div class="column">
                        <i class="fas fa-file-alt fa-1x me-3"></i>
                        <label for="" class="text-white fs-5">3
                            <label for="" class="fs-5 text-white">Reservations</label>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4 ms-3">
            <div class="card bg-warning">
                <div class="card-body text-white">
                    <div class="column">
                        <i class="fas fa-bed fa-1x me-3"></i>
                        <label for="" class="text-white fs-5">30
                            <label for="" class="fs-5 text-white">Chambres</label>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Main top Section Ends -->

    <hr>

    <!-- Reservations list table section starts -->
    <div class="card text-center ms-3 me-2">
        <div class="card-header">
            <label for="" class="float-start text-success
                fw-bold fs-4">Liste des reservations</label>
        </div>
        <div class="card-body">
            <p class="card-text">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Ref</th>
                        <th scope="col">D_res</th>
                        <th scope="col">entree</th>
                        <th scope="col">Sortie</th>
                        <th scope="col">Nb_adulte</th>
                        <th scope="col">Nb_enfant</th>
                        <th scope="col">Nb_chambre</th>
                        <th scope="col">Status</th>
                        <th scope="col">numfac</th>
                        <th scope="col">IdPerso</th>
                        <th scope="col">IdClient</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>23/06/2023</td>
                        <td>29/06/2023</td>
                        <td>05/07/2023</td>
                        <td>1</td>
                        <td>0</td>
                        <td>1</td>
                        <td class="badge rounded-pill bg-success"
                        >Confirmé</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>22/06/2023</td>
                        <td>30/06/2023</td>
                        <td>06/07/2023</td>
                        <td>1</td>
                        <td>0</td>
                        <td>1</td>
                        <td class="badge rounded-pill bg-primary"
                        >En attente</td>
                        <td>1</td>
                        <td>2</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>20/06/2023</td>
                        <td>01/07/2023</td>
                        <td>07/07/2023</td>
                        <td>2</td>
                        <td>2</td>
                        <td>1</td>
                        <td class="badge rounded-pill bg-danger"
                        >Annulée</td>
                        <td>1</td>
                        <td>3</td>
                        <td>3</td>
                    </tr>

                    </tr>
                    </tbody>
                </table>
            </div>
            </p>
        </div>

    </div>
    <!-- Reservations list table section ends -->

    <hr>


    <!-- Client list table section starts -->
    <div class="card text-center ms-3 me-2">
        <div class="card-header">
            <label for="" class="float-start text-success
                fw-bold fs-4">Liste des clients</label>
        </div>
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
                    </tr>
                    </tr>
                    </tbody>
                </table>
            </div>
            </p>
        </div>

    </div>
    <!-- Clients list table section ends -->

    <hr>

    <!-- Personnel list table section starts -->
    <div class="card text-center ms-3 me-2">
        <div class="card-header">
            <label for="" class="float-start text-success
                fw-bold fs-4">Liste du personnel</label>
        </div>
        <div class="card-body">
            <p class="card-text">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Prenom</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Login</th>
                        <th scope="col">Mot de passe</th>
                        <th scope="col">Rôle</th>
                        <th scope="col">Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Marie Emma</td>
                        <td>Semevo</td>
                        <td>meslog</td>
                        <td>passer</td>
                        <td>Receptionniste</td>
                        <td>marieemmasemevo@example.com</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Paul</td>
                        <td>Ndour</td>
                        <td>pnlog</td>
                        <td>passer123</td>
                        <td>Gerant</td>
                        <td>paulndour@example.com</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Fabrice Jordan Christian</td>
                        <td>Ramos</td>
                        <td>fjcrlog</td>
                        <td>comprendrien</td>
                        <td>Directeur</td>
                        <td>fabricejordan@example.com</td>
                    </tr>
                    </tr>
                    </tbody>
                </table>
            </div>
            </p>
        </div>

    </div>
    <!-- Personnel list table section ends -->

    <hr>
    <!-- Hotel list table section starts -->
    <div class="card text-center ms-3 me-2">
        <div class="card-header">
            <label for="" class="float-start text-success
                fw-bold fs-4">Liste des hotels</label>

        </div>
        <div class="card-body">
            <p class="card-text">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Adresse</th>
                        <th scope="col">Pays</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Corniche Hôtel</td>
                        <td>Corniche Ouest - Dakar - Senegal</td>
                        <td>Senegal</td>
                    </tr>
                    </tr>
                    </tbody>
                </table>
            </div>
            </p>
        </div>

    </div>
    <!-- Hotel list table section ends -->

    <hr>
    <!-- Chambre list table section starts -->
    <div class="card text-center ms-3 me-2">
        <div class="card-header">
            <label for="" class="float-start text-success
                fw-bold fs-4">Liste des chambres</label>
        </div>
        <div class="card-body">
            <p class="card-text">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Numero</th>
                        <th scope="col">Type</th>
                        <th scope="col">Etat</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Classique</td>
                        <td class="badge rounded-pill bg-success"
                        >Occupé</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Economique</td>
                        <td class="badge rounded-pill bg-primary"
                        >Disponible</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Couple</td>
                        <td class="badge rounded-pill bg-danger"
                        >Maintenance</td>
                    </tr>
                    </tr>
                    </tbody>
                </table>
            </div>
            </p>
        </div>

    </div>
    <!-- Chambres list table section ends -->

    <hr>

    <!-- Chart Starts -->
    <div class="table-responsive">
        <div id="chart_div" style="width: 100%; height: 500px;"></div>
    </div>
    <!-- Chart Ends -->

</div>
<!-- Main Section Ends -->

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawVisualization);

    function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
            ['Month', 'Economique', 'Classique', 'Famille', 'Luxe', 'Affaire', 'Couple'],
            ['2023/02',  5,      8,         2,             8,           0,      4],
            ['2023/03',  5,      0,        9,             8,          8,      2],
            ['2023/04',  7,      2,        6,             1,           7,      3],
            ['2023/05',  9,      0,        5,             8,           5,      4],
            ['2023/06',  6,      1,        9,             6,          2,      6],
            ['2023/07',  6,      1,         9,             6,          3,      6],
        ]);

        var options = {
            title : 'Statistiques mensuelles',
            vAxis: {title: 'Nombre de reservations'},
            hAxis: {title: 'Mois'},
            seriesType: 'bars',
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    }
</script>

</body>
