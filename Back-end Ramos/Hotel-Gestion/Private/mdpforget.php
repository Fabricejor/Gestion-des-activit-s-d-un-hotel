<?php
    session_start();
    if (isset($_POST['search'])) {
        include 'BD/LinkDB.php';
        $erreur="";

        if (isset($_POST['email'])) {
            $email= $_POST['email'];
            $req = $mysqli->query("SELECT * FROM `administrateur`WHERE email='$email'  ");
            $num_ligne=mysqli_num_rows($req);
            if ($num_ligne >0 && $num_ligne <2) {
                ?>
                    <script>
                        function myFunction() {
                          alert("Un message a été envoyé aux admins ,on vous recontactera");
                        }
                        myFunction();
                    </script>
                <?php
                $_SESSION['donne1'] = $email;
                $url = 'MAILS/Messages/Forgetpasswordmail.php';
                header("Location:".$url);

            }else{
                $erreur="aucun utilisateur trouvé";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mot de passe oublier</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="Ressources/css/mdpforget.css">
    <!------ Include the above in your HEAD tag ---------->
</head>
<body>
    <div class="container">
    	<div class="row">
            <div class="col-md-6">
        		<h2>Tapez votre adresse mail</h2>
                <button class="btn" onclick="history.back()">⬅️</button>

                <form action="" method="post">
                <div id="custom-search-input">
                    <div class="input-group col-md-12">
                        <input type="email" name="email" class="form-control input-lg" placeholder="E-mail" required />
                        <span class="input-group-btn">
                            <button class="btn btn-info btn-lg" name="search" type="submit">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
                </div>
                <?php
        if (isset($erreur)) {
            print"<p class='erreur'>" .$erreur. "</p>";//si la variable erreur existe alors on l'affiche
        }
        ?>
            </div>
    	</div>
    </div>
</body>
</html>