<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_POST && isset($_POST['send'], $_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    if (!$name) {
        $errorMsg = "Entrer votre nom s'il vous plait";
    } elseif (!preg_match("/^\S+@\S+$/", $email) || !$email) {
        $errorMsg = "Entrer une adresse email valide s'il vous plait";
    } elseif (!$message) {
        $errorMsg = "Entrer votre message s'il vous plait";
    } else {

        require 'PHPMailer/src/Exception.php';
        require 'PHPMailer/src/PHPMailer.php';
        require 'PHPMailer/src/SMTP.php';

        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Host = 'smtp.gmail.com';               //Adresse IP ou DNS du serveur SMTP
        $mail->Port = 465;                          //Port TCP du serveur SMTP
        $mail->SMTPAuth = 1;                        //Utiliser l'identification
        $mail->CharSet = 'UTF-8';

        if($mail->SMTPAuth){
            $mail->SMTPSecure = 'ssl';               //Protocole de sécurisation des échanges avec le SMTP
            $mail->Username   =  'hotelmanagementclient2023@gmail.com';    //Adresse email à utiliser
            $mail->Password   =  'tskwarlxjnfzmjox';         //Mot de passe de l'adresse email à utiliser
        }

        $mail->From       = trim($_POST["email_from"]);                //L'email à afficher pour l'envoi
        $mail->FromName   = trim($_POST["name"]);          //L'alias de l'email de l'emetteur

        $mail->AddAddress("paulndour1999@gmail.com");

        $mail->Subject    =  $_POST["subject"];                      //Le sujet du mail
        $mail->WordWrap   = 50; 			       //Nombre de caracteres pour le retour a la ligne automatique
        $mail->AltBody = $_POST["message"]; 	       //Texte brut
        $mail->IsHTML(false);                                  //Préciser qu'il faut utiliser le texte brut
        $mail->MsgHTML($_POST["message"]);            //Forcer le contenu du body html pour ne pas avoir l'erreur "body is empty' même si on utilise l'email en contenu alternatif

        if (!$mail->send()) {
            $errorMsg = $mail->ErrorInfo;
            header("Location: contactez_nous.php?error=0");

        } else{
            header("Location: contactez_nous.php?success=1");
        }
        exit;
    }
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.min.js">

<title>contactez-nous</title>

<body style="background: #eeeeee; height: 100vh;">

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
                    <a href="services.php" class="nav-link fw-bolder">Services</a>
                </li>
                <li class="nav-item">
                    <a href="contactez_nous.php.php" class="nav-link active fw-bolder">Contactez-nous</a>
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

<section class="container mt-5">
    <div class="pricing-header px-3 py-3 pt-md-5
    pb-md-4 mx-auto text-center">
        <h1 class="display-4 text-info fiw-bold">Contactez-nous</h1>
        <p class="lead">
            L'hôtel Corniche est à votre disposition.
        </p>
    </div>

    <div class="row text-center bg-secondary text-white fw-bold">
        <div class="col-md-4">
            <a class="btn-floating text-info fs-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>
            </a>
            <p>Dakar</p>
            <p>Sénégal</p>
        </div>
        <div class="col-md-4">
            <a class="btn-floating text-info fs-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                </svg>
            </a>
            <p>+221 33 000 00 00</p>
            <p>Lun - Dim, 24h/24h</p>
        </div>
        <div class="col-md-4">
            <a class="btn-floating text-info fs-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                </svg>
            </a>
            <p>rsn@example.com</p>
            <p>sen@example.com</p>
        </div>
    </div>

    <hr class="featurette-divider">


    <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
    <div class="mt-5 alert alert-success">
            <p><?php echo 'Message bien envoyé'; ?></p>
    </div>
    <?php endif; ?>

    <?php if (isset($_GET['error']) && $_GET['error'] == 0): ?>
    <div class="mt-5 alert alert-danger">
            <p><?php echo 'Erreur serveur veillez nous contacter par telephone'; ?></p>
    </div>
    <?php endif; ?>

    <?php if (isset($errorMsg)): ?>
    <div class="alert alert-danger">
            <p><?php echo $errorMsg; ?></p>
    </div>
    <?php endif; ?>


    <div class="container">
        <div class="row">
            <div class="col-sm">
                <form method="post" action="contactez_nous.php" >
                    <div class="mb-3">
                        <label for="Name" class="form-label">
                            Nom<sup>*</sup></label>
                        <input type="text" name="name" class="form-control
                        border-info rounded-pill" aria-describedby="nameHelp">
                    </div>
                    <div class="mb-3">
                        <label for="Email" class="form-label">
                            Adresse Email <sup>*</sup></label>
                        <input type="email" name="email" class="form-control
                        border-info rounded-pill" aria-describedby="emailHelp">
                        <div class="form-text">
                            Nous n'allons partager votre email à personne.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="Sujet" class="form-label">
                            Subject</label>
                        <input type="text" name="subject" class="form-control
                        border-info rounded-pill" aria-describedby="subjectHelp">
                    </div>
                    <div class="mb-3">
                        <label for="Message" class="form-label">
                            Message<sup>*</sup></label>
                        <textarea name="message" class="form-control
                        border-info " aria-describedby="subjectHelp"
                                  rows="10" ></textarea>
                    </div>

                    <div class="mb-3">
                        <input type="checkbox" class="form-check-input
                        border-info rounded-pill"
                        id="checkbox" aria-describedby="checkboxHelp">
                        <label for="checkbox" class="form-check-label">
                            Voulez-vous recevoir par mail des informations sur nos nouveaux services?</label>
                    </div>

                    <div class="d-grid gap-2 mb-5">
                         <button class="btn btn-info border-info
                         rounded-pill" name="send" type="submit">Envoyer</button>
                    </div>
                </form>
            </div>
            <div class="col-sm">
                <iframe class="responsive-iframe ms-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.4414453356244!2d-17.475223425011873!3d14.68761018580918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec17347a7ddca45%3A0xe0ca3b156cde76d!2sCorniche%20Ouest!5e0!3m2!1sfr!2ssn!4v1687805706803!5m2!1sfr!2ssn" style="border: 0; width: 100%; height: 600px"></iframe>
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

