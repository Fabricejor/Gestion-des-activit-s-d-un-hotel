<?php
    //demarer une session avant toute chose
    session_start();
    if (isset($_POST['connexion'])) {
        include 'BD/LinkDB.php';
        $erreur="";

        if (isset($_POST['login']) && isset($_POST['password'])) {
            $login= $_POST['login'];
            $mdp = $_POST['password'];
            $req = $mysqli->query("SELECT * FROM `administrateur`WHERE login='$login' AND motDePasse='$mdp' ");
            $num_ligne=mysqli_num_rows($req);
            //verification
            if ($num_ligne >0 && $num_ligne <2) {
                $row=$req->fetch_assoc();
                $_SESSION['email']=$row['email'];
                $_SESSION['role']=$row['role'];
                header("Location:index.php");


            }else if ($num_ligne==0) {
                $req1 = $mysqli->query("SELECT * FROM `personel`WHERE login='$login' AND mdp='$mdp' ");
                $num_ligne1=mysqli_num_rows($req1);
                if ( $num_ligne1 >0 && $num_ligne1 <2) {
                    $row1=$req1->fetch_assoc();
                    $_SESSION['email']=$row1['email'];
                    $_SESSION['role']=$row1['role'];
                    header("Location:index.php");
                }else {
                    $erreur="login ou Mots de passe incorect!";
                }

            }else {
                $erreur="login ou Mots de passe incorect!";
            }

        }else {
            $erreur="login ou Mots de passe incorect!";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identifier vous</title>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">'
<link rel="stylesheet" href="Ressources/css/connexion.css"  >
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<!------ Include the above in your HEAD tag ---------->

<body>

    <div class="container">
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Hôtel Portails</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="mdpforget.php">Mot de passe oublié?</a></div>
                    </div>

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                        <form id="loginform" class="form-horizontal" role="form" action="" method="post">

                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login" type="text" class="form-control" name="login" value="" placeholder="login" required>
                                    </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="password" type="password" class="form-control" name="password" placeholder="mot de passe" required>
                                    </div>



                            <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                        <?php
                                            if (isset($erreur)) {
                                                print"<p class='erreur'>" .$erreur. "</p>";//si la variable erreur existe alors on l'affiche
                                            }
                                        ?>
                                        </label>
                                      </div>
                                    </div>


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <input id="connexion" type="submit" name="connexion" value="se connecter" class="btn btn-success">

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Vous etes sur le site interne de l'hôtel
                                        </div>
                                    </div>
                                </div>
                        </form>



                        </div>
                    </div>
        </div>

    </div>
</body>
</html>