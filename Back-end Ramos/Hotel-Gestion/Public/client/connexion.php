<?php
global $conn;
session_start();
include ('config.php');

if (isset($_GET['logout'])){
    if (isset($_SESSION['logged_in'])){
        unset($_SESSION['logged_in']);
        unset($_SESSION['prenom']);
        unset($_SESSION['nom']);
        unset($_SESSION['sexe']);
        unset($_SESSION['couriel']);
        unset($_SESSION['login']);
        unset($_SESSION['mdp']);
        unset($_SESSION['telephone']);
        unset($_SESSION['nationalite']);
        header('Location: connexion.php');
        exit();
    }
}

if (isset($_SESSION['logged_in'])){
    header('Location: client.php');
    exit();
}
if (isset($_POST['login_btn'])){
    $login = $_POST['login'];
    $mdp = md5($_POST['mdp']);

    $stmt = $conn->prepare("SELECT idClient, prenom, nom, sexe, couriel, login, mdp, telephone, nationalite from client where login=? AND mdp=? LIMIT 1");
    $stmt->bind_param('ss',$login,$mdp);
    if ($stmt->execute()){
        $stmt->bind_result($idClient,$prenom, $nom, $sexe, $couriel, $login, $mdp, $telephone, $nationalite);
        $stmt->store_result();

        if ($stmt->num_rows() == 1){
            $row = $stmt->fetch();
            $_SESSION['idClient'] = $idClient;
            $_SESSION['prenom'] = $prenom;
            $_SESSION['nom'] = $nom;
            $_SESSION['sexe'] = $sexe;
            $_SESSION['couriel'] = $couriel;
            $_SESSION['login'] = $login;
            $_SESSION['mdp'] = $mdp;
            $_SESSION['telephone'] = $telephone;
            $_SESSION['nationalite'] = $nationalite;
            $_SESSION['logged_in'] = true;
            header('Location: client.php');
            exit();
        }else{
            $_SESSION['erreu'] = "Ce compte n'existe pas";
            header('Location: connexion.php');
            exit();
        }
    }else{
        //error
        $_SESSION['erreur'] = "Votre connexion a echoué";
        header('Location: connexion.php');
        exit();
    }
}
?>


<title>connexion</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

<body>
<?php
if (isset($_SESSION['success_inscription'])) {?>
    <div class="mt-5 alert alert-success">
        <?php echo '<p>' . $_SESSION['success_inscription'] . '</p>';
        unset($_SESSION['success_inscription']); ?>
    </div>
<?php } ?>

<?php if (isset($_SESSION['erreur'])) {?>
    <div class="mt-5 alert alert-danger">
        <?php echo '<p>' . $_SESSION['erreur'] . '</p>';
        unset($_SESSION['erreur']); ?>
    </div>
<?php } ?>

<?php if (isset($_SESSION['erreu'])) {?>
    <div class="mt-5 alert alert-danger">
        <?php echo '<p>' . $_SESSION['erreu'] . '</p>';
        unset($_SESSION['erreu']); ?>
    </div>
<?php } ?>
    <div class="container">
        <div class="d-flex justify-content-between " style="margin-left: 30%; margin-top: 15%">
            <div class="card">
                <div class="card-header bgcard">
                    <h3 class="text-white">Connexion</h3>
                    <div class="d-flex justify-content-end social_icon">
                        <span><i class="fab fa-facebook"></i></span>
                        <span><i class="fab fa-google-plus"></i></span>
                        <span><i class="fab fa-twitter"></i></span>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="connexion.php" class="needs-validation" novalidate>
                        <div class="input-group mb-3">
                            <span class="input-group-text
                            border-warning bg-warning text-dark">
                                <i class="fas fa-user"></i>
                            </span>
                            <input name="login" type="text" class="form-control border-warning" id="username" placeholder="login" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text
                            border-warning bg-warning text-dark">
                                <i class="fas fa-key"></i>
                            </span>
                            <input name="mdp" type="password" class="form-control border-warning" id="password" placeholder="Mot de passe" required>
                            <div class="invalid-feedback">
                                Votre mot de passe est requis
                            </div>
                        </div>
                        <div class="form-check">
                            <input name="remember_check" type="checkbox"
                                   class="form-check-input" id="remember">
                            <label for="remember" class="form-check-label text-info">Se rappeler de moi</label>
                        </div>
                        <div class="form-group mt-3 d-grid">
                            <button name="login_btn" type="submit" class="btn btn-warning
                            btn-small fw-bold">
                            <i class="fas fa-sign-in-alt">Se connecter</i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="card-footer bgcard">
                    <div class="d-flex justify-content-center
                    text-white">
                        Vous n'avez pas de compte?
                        <a href="inscription.php" class="text-decoration-none
                            link-info ms-2">S'inscrire</a>
                    </div>
                    <div class="d-flex justify-content-center
                    text-white">
                        <a href="#" class="text-decoration-none
                            link-info ms-2">Mot de passe oublie?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<style>
    body{
        background-image:url("https://github.com/Fabricejor/Gestion-des-activit-s-d-un-hotel/blob/main/images/background1.jpg?raw=true") ;
        background-size:cover ;
        background-repeat: no-repeat;
        height: 100%;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    .container{
        height: 100%;
        align-content: center;
    }

    .card{
        height: 370px;
        margin-top: auto;
        margin-botom: auto;
        width: 435px;
        border:0;
    }
    .bgcard{
        background-image: linear-gradient(to bottom right,red,rgb(123,1,1));
    }

    .social_icon span{
        font-size: 30px;
        margin-left: 10px;
        color: #FFC312;
    }

    .social_icon span:hover{
        color: white;
        cursor: pointer;
    }

    .social_icon{
        position: absolute;
        right: 20px;
        top: 0px;
    }
</style>
</body>