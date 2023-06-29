<?php
    session_start();
    include 'BD/LinkDB.php';

    // if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
    //     $email=$_SESSION['email'];
    //     $req = $mysqli->query("SELECT * FROM `administrateur`WHERE login='$email'");

    // }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="Ressources/css/indexer.css">
    <script type="text/javascript">
        // Fonction de redirection différée
        function redirectionDifferee() {
            // Attendre le délai spécifié (5 secondes)
            setTimeout(function() {
                // Effectuer la redirection vers une autre page
                window.location.href = "redirect.php";
            }, 5000); // Délai en millisecondes (5 secondes = 5000 millisecondes)
        }
    </script>
</head>
<body onload="redirectionDifferee()">
    <div id="circle">
      <div class="loader">
        <div class="loader">
            <div class="loader">
               <div class="loader">

               </div>
            </div>
        </div>
      </div>
    </div>
</body>
</html>