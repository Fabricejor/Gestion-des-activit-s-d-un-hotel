<?php
global $mysqli;
session_start();
include '../../BD/LinkDB.php';

//Creer un personnel
if (isset($_POST['creer'])) {
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $login = $_POST['login'];
    $mdp = $_POST['mdp'];
    $confirm_mdp = $_POST['confirm_mdp'];
    $role = $_POST['role'];
    $email = $_POST['email'];

    // if password don't match
    if ($mdp !== $confirm_mdp) {
        $_SESSION['error'] = "Les mot de passes ne sont pas identique";
        header('Location: listePersonnel.php');
        exit();
    } // if password is less than 6 char
    else if (strlen($mdp) < 6) {
        $_SESSION['erro'] = "Le mot de passe doit dépasser 6 caractères";
        header('Location: listePersonnel.php');
        exit();
    }
    // S'il n'y a pas d'erreur
    else {
        // Regarder s'il y a un personel qui a le meme email
        $stmt1 = $mysqli->prepare("SELECT count(*) FROM personel where email=?");
        $stmt1->bind_param('s', $email);
        $stmt1->execute();
        $stmt1->bind_result($num_rows);
        $stmt1->store_result();
        $stmt1->fetch();

        // Regarder s'il y a un personel qui a le meme login
        $stmt2 = $mysqli->prepare("SELECT count(*) FROM personel where login=?");
        $stmt2->bind_param('s', $login);
        $stmt2->execute();
        $stmt2->bind_result($num_row);
        $stmt2->store_result();
        $stmt2->fetch();


        if ($num_rows != 0) {
            $_SESSION['err'] = "On a deja utilise cette email";
            header('Location: listePersonnel.php');
            exit();
        }

        else if ($num_row != 0) {
            $_SESSION['e'] = "On a deja utilise ce login";
            header('Location: listePersonnel.php');
            exit();
        }

        else {
            // Ajouter un nouveau personnel
            $stmt = $mysqli->prepare("INSERT INTO personel (prenom, nom, login, mdp, role, email, idmin) 
                                    VALUES (?,?,?,?,?,?,?)");

            $md5 = md5($mdp);
            $stmt->bind_param('sssssss', $prenom, $nom, $login, $md5, $role, $email, $_SESSION['idmin']);

            // Si le compte a bien ete creer
            if ($stmt->execute()){
                $_SESSION['prenom'] = $prenom;
                $_SESSION['nom'] = $nom;
                $_SESSION['login'] = $login;
                $_SESSION['mdp'] = $mdp;
                $_SESSION['role'] = $role;
                $_SESSION['email'] = $email;
                $_SESSION['creer'] = "personnel ajouté avec success";
                header('Location: listePersonnel.php');
                exit();
                // Si le compte n'a pas été creer
            }else{
                $_SESSION['er'] = "Echec de l'ajout";
                header('Location: listePersonnel.php');
                exit();
            }
        }
    }
}

// Modifier un personnel
if (isset($_POST['modifier'])) {
    $idperso = $_POST['idperso'];
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $login = $_POST['login'];
    $mdp = $_POST['mdp'];
    $confirm_mdp = $_POST['confirm_mdp'];
    $role = $_POST['role'];
    $email = $_POST['email'];

    // if password don't match
    if ($mdp !== $confirm_mdp) {
        $_SESSION['error'] = "Les mot de passes ne sont pas identique";
        header('Location: listePersonnel.php');
        exit();
    } // if password is less than 6 char
    else if (strlen($mdp) < 6) {
        $_SESSION['erro'] = "Le mot de passe doit dépasser 6 caractères";
        header('Location: listePersonnel.php');
        exit();
    }
    // S'il n'y a pas d'erreur
    else {
        // Regarder s'il y a un personel qui a le meme email
        $stmt1 = $mysqli->prepare("SELECT count(*) FROM personel where email=? AND idperso!='$idperso'");
        $stmt1->bind_param('s', $email);
        $stmt1->execute();
        $stmt1->bind_result($num_rows);
        $stmt1->store_result();
        $stmt1->fetch();

        // Regarder s'il y a un personel qui a le meme login
        $stmt2 = $mysqli->prepare("SELECT count(*) FROM personel where login=? AND idperso!='$idperso'");
        $stmt2->bind_param('s', $login);
        $stmt2->execute();
        $stmt2->bind_result($num_row);
        $stmt2->store_result();
        $stmt2->fetch();


        if ($num_rows != 0) {
            $_SESSION['err'] = "On a deja utilise cette email";
            header('Location: listePersonnel.php');
            exit();
        }

        else if ($num_row != 0) {
            $_SESSION['e'] = "On a deja utilise ce login";
            header('Location: listePersonnel.php');
            exit();
        }

        else {
            // Modifier un personnel
            $md5 = md5($mdp);
            $stmt = "UPDATE personel SET prenom='$prenom', nom='$nom', login='$login', mdp='$md5', role='$role', email='$email' where idperso='$idperso'";

            if ($mysqli->query($stmt) === TRUE){
                $_SESSION['modifier'] = "personnel modifier avec success";
                header('Location: listePersonnel.php');
                exit();
                // Si le compte n'a pas été creer
            }else{
                $_SESSION['er_modifier'] = "Echec de la modification";
                header('Location: listePersonnel.php');
                exit();
            }
        }
    }
}

// Supprimer un personnel
if (isset($_GET['idperso'])){
    $idperso = $_GET['idperso'];

    $stmt = "DELETE FROM personel WHERE idperso='$idperso'";
    if ($mysqli->query($stmt)){
        header('Location : listePersonnel');
        exit();
    }
}

// Afficher un personnel
$stmt = $mysqli->prepare("SELECT idperso, prenom, nom, login, mdp, role, email FROM personel");
$stmt->execute();
$stmt->bind_result($idperso, $prenom, $nom, $login, $mdp, $role, $email);


?>


<title>dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

<link rel="stylesheet" href="dashboard.css">
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
    <a href="listePersonnel.php" class="navbar-brand ms-2 customsizelogo">
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
        <a href="dashboard.php">
            <i class="fas fa-desktop" style="color:rgb(4,87,155);"></i>
            <span>Dashboard</span>
        </a>
        <a href="listeClients.php">
            <i class="fas fa-table" style="color:rgb(187,255,0);"></i>
            <span>Clients</span>
        </a>
        <a href="listePersonnel.php">
            <i class="fas fa-users" style="color:rgb(255,115,0);"></i>
            <span>Personnel</span>
        </a>
        <a href="parametres.php">
            <i class="fas fa-cogs" style="color:rgb(162,0,255);"></i>
            <span>Paramètres</span>
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

    <!-- Add new Modal Starts-->

    <div class="modal fade" id="addNewModal" tabindex="-1"
         aria-labelledby="addNewModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success text-white fw-bold">
                    <h5 class="modal-title">Ajouter dans personnel</h5>
                    <button type="button" class="btn-close"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-success">
                    <form action="listePersonnel.php" method="post">
                        <div class="mb-3">
                            <label for="" class="form-label">Prenom</label>
                            <input name="prenom" type="text" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Nom</label>
                            <input name="nom" type="text" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Login</label>
                            <input name="login" type="text" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Mot de passe</label>
                            <input name="mdp" type="password" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Confirmer Mot de passe</label>
                            <input name="confirm_mdp" type="password" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Rôle</label>
                            <select name="role" type="text" class="form-control" required>
                                <option>directeur</option>
                                <option>menagere</option>
                                <option>receptioniste</option>
                                <option>gerant</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input name="email" type="email" class="form-control" required>
                        </div>

                        <div class="d-grid">
                            <button class="btn btn-success fw-bold text-white"
                                    type="submit" name="creer">
                                <i class="fas fa-plus-circle">Creer</i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Add new Modal Ends-->

    <!-- Update Modal Starts-->

    <div class="modal fade" id="updateModal" tabindex="-1"
         aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white fw-bold">
                    <h5 class="modal-title">Modifier dans personnel</h5>
                    <button type="button" class="btn-close"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-primary">
                    <form action="listePersonnel.php" method="post">
                        <div class="mb-3">
                            <label for="" class="form-label">idperso</label>
                            <input id="personnel-id-input" name="idperso" type="text" class="form-control" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Prenom</label>
                            <input id="personnel-prenom-input" name="prenom" type="text" class="form-control" value="">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Nom</label>
                            <input id="personnel-nom-input" name="nom" type="text" class="form-control" value="">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Login</label>
                            <input id="personnel-login-input" name="login" type="text" class="form-control" value="">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Mot de passe</label>
                            <input name="mdp" type="password" class="form-control" value="">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Confirmer Mot de passe</label>
                            <input name="confirm_mdp" type="password" class="form-control" value="">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Rôle</label>
                            <select id="personnel-role-input" name="role" type="text" class="form-control" required>
                                <option>directeur</option>
                                <option>menagere</option>
                                <option>receptioniste</option>
                                <option>gerant</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input id="personnel-email-input" name="email" type="email" class="form-control" value="">
                        </div>

                        <div class="d-grid">
                            <button class="btn btn-primary fw-bold text-white"
                                    type="submit" name="modifier">
                                <i class="fas fa-edit" >Modifier</i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Update Modal Ends-->


    <!-- Personnel list table section starts -->
    <div class="card text-center ms-3 me-2">
        <div class="card-header">
            <label for="" class="float-start text-success
                fw-bold fs-4">Liste du personnel</label>
            <a href="#" class="btn btn-success btn-sm float-end text-white
                fw-bold" data-bs-toggle="modal" data-bs-target="#addNewModal">
                <i class="fa fa-plus me-1 btn-sm"></i>
                Add New
            </a>
        </div>
        <?php
        if (isset($_SESSION['error'])) {?>
            <div class="mt-5 alert alert-danger">
                <?php echo '<p>' . $_SESSION['error'] . '</p>';
                unset($_SESSION['error']); ?>
            </div>
        <?php } ?>


        <?php
        if (isset($_SESSION['erro'])) {?>
            <div class="mt-5 alert alert-danger">
                <?php echo '<p>' . $_SESSION['erro'] . '</p>';
                unset($_SESSION['erro']); ?>
            </div>
        <?php } ?>

        <?php
        if (isset($_SESSION['err'])) { ?>
            <div class="mt-5 alert alert-danger">
                <?php
                echo '<p>' . $_SESSION['err'] . '</p>';
                unset($_SESSION['err']); ?>
            </div>
        <?php } ?>

        <?php if (isset($_SESSION['e'])) {?>
            <div class="mt-5 alert alert-danger">
                <?php echo '<p>' . $_SESSION['e'] . '</p>';
                unset($_SESSION['e']);?>
            </div>
        <?php } ?>

        <?php
        if (isset($_SESSION['er'])) {?>
            <div class="mt-5 alert alert-danger">
                <?php
                echo '<p>' . $_SESSION['er'] . '</p>';
                unset($_SESSION['er']);?>
            </div>
        <?php } ?>

        <?php
        if (isset($_SESSION['creer'])) {?>
            <div class="mt-5 alert alert-success">
                <?php echo '<p>' . $_SESSION['creer'] . '</p>';
                unset($_SESSION['creer']); ?>
            </div>
        <?php } ?>

        <?php if (isset($_SESSION['modifier'])) {?>
            <div class="mt-5 alert alert-success">
                <?php echo '<p>' . $_SESSION['modifier'] . '</p>';
                unset($_SESSION['modifier']); ?>
            </div>
        <?php } ?>

        <?php
        if (isset($_SESSION['er_modifier'])) {?>
            <div class="mt-5 alert alert-danger">
                <?php
                echo '<p>' . $_SESSION['er_modifier'] . '</p>';
                unset($_SESSION['er_modifier']);?>
            </div>
        <?php } ?>

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
                    <?php while ($stmt->fetch()) { ?>
                    <tbody>
                    <tr>
                        <th scope="row"><?php echo $idperso?></th>
                        <td><?php echo $prenom?></td>
                        <td><?php echo $nom?></td>
                        <td><?php echo $login?></td>
                        <td><?php echo $mdp?></td>
                        <td><?php echo $role?></td>
                        <td><?php echo $email?></td>
                        <td>
                            <button class="btn btn-sm float-end text-white
                            fw-bold" data-bs-toggle="modal" data-bs-target="#updateModal">
                                <i class="fas fa-edit text-primary"
                                   data-personnel-id="<?php echo $idperso;?>"
                                   data-personnel-prenom="<?php echo $prenom;?>"
                                   data-personnel-nom="<?php echo $nom;?>"
                                   data-personnel-login="<?php echo $login;?>"
                                   data-personnel-role="<?php echo $role;?>"
                                   data-personnel-email="<?php echo $email;?>"
                                ></i>
                            </button> /
                            <a href="listePersonnel.php?idperso=<?php echo $idperso ?>">
                                <i class="fas fa-trash-alt text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    </tbody>
                    <?php } ?>
                </table>
            </div>
            </p>
        </div>

    </div>
    <!-- Personnel list table section ends -->
<div class="bg-primary">
    <script>
        var editIcons = document.querySelectorAll(".fa-edit");
        editIcons.forEach(function(icon) {
            icon.addEventListener("click", function() {
                var personnelId = icon.getAttribute("data-personnel-id");
                var personnelprenom = icon.getAttribute("data-personnel-prenom");
                var personnelnom = icon.getAttribute("data-personnel-nom");
                var personnellogin = icon.getAttribute("data-personnel-login");
                var personnelrole = icon.getAttribute("data-personnel-role");
                var personnelemail = icon.getAttribute("data-personnel-email");
                var modal = document.getElementById("updateModal");
                var personnelIdInput = document.getElementById("personnel-id-input");
                var personnelprenomInput = document.getElementById("personnel-prenom-input");
                var personnelnomInput = document.getElementById("personnel-nom-input");
                var personnelloginInput = document.getElementById("personnel-login-input");
                var personnelroleInput = document.getElementById("personnel-role-input");
                var personnelemailInput = document.getElementById("personnel-email-input");
                personnelIdInput.value = personnelId;
                personnelprenomInput.value = personnelprenom;
                personnelnomInput.value = personnelnom;
                personnelloginInput.value = personnellogin;
                personnelroleInput.value = personnelrole;
                personnelemailInput.value = personnelemail;
                modal.style.display = "block";
            });
        });
    </script>



</div>


</body>
</div>
<!-- Main Section Ends -->


