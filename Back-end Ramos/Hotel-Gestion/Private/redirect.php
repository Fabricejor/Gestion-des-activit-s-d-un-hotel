<?php
    session_start();

    include 'BD/LinkDB.php';

    if (isset($_SESSION['email']) && !empty($_SESSION['email']) && isset($_SESSION['role']) && !empty($_SESSION['role'])) {
        switch ($_SESSION['role']) {
            case 'admin':
                header('location:Roles/Admin');
                break;
            case 'receptioniste':

                header('location:Roles/Receptioniste/');

                break;
            case 'menageres':

                header('location:Roles/Menageres');

                break;
            case 'directeur':

                header('location:Roles/Directeur');

                break;
            default:
                header('location:connexion.php');

                break;
        }
    }else {
        header("location:connexion.php");
    }
?>