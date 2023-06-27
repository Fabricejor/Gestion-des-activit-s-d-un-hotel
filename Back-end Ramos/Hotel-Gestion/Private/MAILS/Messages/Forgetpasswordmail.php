<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer/src/Exception.php';
require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';

    if (isset($_SESSION['donne1'])) {
        $mail = new PHPMailer(true);

        $mail -> isSMTP();
        $mail ->Host = 'smtp.gmail.com';
        $mail ->SMTPAuth = true;
        $mail ->SMTPSecure = 'ssl';
        $mail ->Port = 465;

        $mail ->Username ='hotelmanagementclient2023@gmail.com';
        $mail ->Password ='tskwarlxjnfzmjox';//mdp application
        $mail ->CharSet ='UTF-8';

        $mail ->setFrom('hotelmanagementclient2023@gmail.com');//l'envoyeur
        $mail ->addAddress($_SESSION['donne1']);
        $mail ->isHTML(true);

        $mail ->Subject = "Reinitialisation de votre mot de passe ";
        $mail ->Body ='Si tu recois ce message le module mailing divisé marche';

        $mail ->send();

        echo
        "
            <script>
            alert('Bien envoyé ');
            </script>
            document.location.href = '../../mdpforget.php'
        ";
    }
?>