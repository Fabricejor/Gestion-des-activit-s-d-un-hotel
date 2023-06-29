
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

<title>gererService</title>

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
    <a href="gerant.php" class="navbar-brand ms-2 customsizelogo">
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
        <a href="gerant.php">
            <i class="fas fa-desktop" style="color:rgb(4,87,155);"></i>
            <span>Chambres</span>
        </a>
        <a href="gererService.php">
            <i class="fas fa-table" style="color:rgb(187,255,0);"></i>
            <span>Services</span>
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
    <!-- Main top Section Starts -->

    <hr>

    <div class="col-sm-4 ms-3">
        <div class="card bg-info">
            <div class="card-body text-white">
                <div class="column">
                    <i class="fas fa-file-alt fa-1x me-3"></i>
                    <label for="" class="text-white fs-5">3
                        <label for="" class="fs-5 text-white">Services</label>
                    </label>
                </div>
            </div>
        </div>
    </div>

    <!-- Main top Section Ends -->

    <hr>

    <!-- Add new Modal Starts-->
    <form action="">
        <div class="modal fade" id="addNewModal" tabindex="-1"
             aria-labelledby="addNewModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-success text-white fw-bold">
                        <h5 class="modal-title">Ajouter les informations le service</h5>
                        <button type="button" class="btn-close"
                                data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-success">
                        <div class="mb-3">
                            <label for="" class="form-label">Nom</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Description</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Prix</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="modal-footer">
                            <button href="#" type="submit" class="btn btn-success" aria-label=""
                                    data-bs-toggle="modal" data-bs-target="#addNewModal"
                            >Ajouter</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
    <!-- Add new Modal Ends-->


    <!-- Service list table section starts -->
    <div class="card text-center ms-3 me-2">
        <div class="card-header">
            <label for="" class="float-start text-success
                fw-bold fs-4">Liste des services</label>
            <a href="#" class="btn btn-success btn-sm float-end text-white
                fw-bold" data-bs-toggle="modal" data-bs-target="#addNewModal">
                <i class="fa fa-plus me-1 btn-sm"></i>
                Add New
            </a>

        </div>
        <div class="card-body">
            <p class="card-text">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Numero</th>
                        <td scope="col">Nom</td>
                        <th scope="col">Description</th>
                        <th scope="col">Prix</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Restaurant</td>
                        <td>Le service restauration</td>
                        <td></td>
                        <td>
                            <a href="#">
                                <i class="fas fa-edit text-info"></i> /
                                <i class="fas fa-edit text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Balade en chameau</td>
                        <td>Le service balade en chameau</td>
                        <td></td>
                        <td>
                            <a href="#">
                                <i class="fas fa-edit text-info"></i> /
                                <i class="fas fa-trash-alt text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Balade en quad</td>
                        <td>Le service balade en quad</td>
                        <td></td>
                        <td>
                            <a href="#">
                                <i class="fas fa-edit text-info"></i> /
                                <i class="fas fa-trash-alt text-danger"></i>
                            </a>
                        </td>
                    </tr>


                    </tbody>
                </table>
            </div>
            </p>
        </div>
    </div>
    <!-- Chambres list table section ends -->


</div>
<!-- Reservations list table section ends -->

<hr>

<div class="col-sm-4 ms-3">
    <div class="card bg-warning">
        <div class="card-body text-white">
            <div class="column">
                <i class="fas fa-file-alt fa-1x me-3"></i>
                <label for="" class="text-white fs-5">5
                    <label for="" class="fs-5 text-white">Chambre</label>
                </label>
            </div>
        </div>
    </div>
</div>

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
                    <td>
                        <a href="#">
                            <i class="fas fa-edit text-primary"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Economique</td>
                    <td class="badge rounded-pill bg-primary"
                    >Disponible</td>
                    <td>
                        <a href="#">
                            <i class="fas fa-edit text-primary"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Couple</td>
                    <td class="badge rounded-pill bg-danger"
                    >Maintenance</td>
                    <td>
                        <a href="#">
                            <i class="fas fa-edit text-primary"></i>
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
<!-- Chambres list table section ends -->

</div>
<!-- Main Section Ends -->

</body>
