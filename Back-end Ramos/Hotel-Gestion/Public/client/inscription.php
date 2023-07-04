<?php
session_start();
global $conn;
include('config.php');
    if (isset($_SESSION['logged_in'])){
        header('Location: client.php');
        exit();
    }

    if (isset($_POST['inscription'])) {
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $sexe = $_POST['sexe'];
        $couriel = $_POST['couriel'];
        $login = $_POST['login'];
        $mdp = $_POST['mdp'];
        $confirm_mdp = $_POST['confirm_mdp'];
        $tel = $_POST['tel'];
        $nation = $_POST['nation'];
        $checkbox = $_POST['checkbox'];

        // if password don't match
        if ($mdp !== $confirm_mdp) {
            $_SESSION['error'] = "Les mot de passes ne sont pas identique";
            header('Location: inscription.php');
            exit();
        } // if password is less than 6 char
        else if (strlen($mdp) < 6) {
            $_SESSION['erro'] = "Le mot de passe doit dépasser 6 caractères";
            header('Location: inscription.php');
            exit();
        }
        // S'il n'y a pas d'erreur
        else {
            // Regarder s'il y a un client qui a le meme email
            $stmt1 = $conn->prepare("SELECT count(*) FROM client where couriel=?");
            $stmt1->bind_param('s', $couriel);
            $stmt1->execute();
            $stmt1->bind_result($num_rows);
            $stmt1->store_result();
            $stmt1->fetch();

            // Regarder s'il y a un client qui a le meme login
            $stmt2 = $conn->prepare("SELECT count(*) FROM client where login=?");
            $stmt2->bind_param('s', $login);
            $stmt2->execute();
            $stmt2->bind_result($num_row);
            $stmt2->store_result();
            $stmt2->fetch();

            // Regarder s'il y a un client qui a le meme numero de telephone
            $stmt2 = $conn->prepare("SELECT count(*) FROM client where telephone=?");
            $stmt2->bind_param('s', $tel);
            $stmt2->execute();
            $stmt2->bind_result($num_ro);
            $stmt2->store_result();
            $stmt2->fetch();


            if ($num_rows != 0) {
                $_SESSION['err'] = "Un client a deja utilise cette email";
                header('Location: inscription.php');
                exit();
            }

            else if ($num_row != 0) {
                $_SESSION['e'] = "Un client a deja utilise ce login";
                header('Location: inscription.php');
                exit();
            }

            else if ($num_ro != 0) {
                $_SESSION['r'] = "Un client a deja utilise ce numero de telephone";
                header('Location: inscription.php');
                exit();
            }


            else {
                // Ajouter un nouveau client
                $stmt = $conn->prepare("INSERT INTO client (prenom, nom, sexe, couriel, login, mdp, telephone, nationalite) 
                                    VALUES (?,?,?,?,?,?,?,?)");

                $md5 = md5($mdp);
                $stmt->bind_param('ssssssss', $prenom, $nom, $sexe, $couriel, $login, $md5, $tel, $nation);

                // Si le compte a bien ete creer
                if ($stmt->execute()){
                    $_SESSION['prenom'] = $prenom;
                    $_SESSION['nom'] = $nom;
                    $_SESSION['sexe'] = $sexe;
                    $_SESSION['couriel'] = $couriel;
                    $_SESSION['login'] = $login;
                    $_SESSION['mdp'] = $mdp;
                    $_SESSION['tel'] = $tel;
                    $_SESSION['nation'] = $nation;
                    $_SESSION['logged_in'] = true;
                    $_SESSION['success_inscription'] = "Votre inscription a réussi";
                    header('Location: connexion.php');
                    exit();
                // Si le compte n'a pas été creer
                }else{
                    $_SESSION['er'] = "Votre inscription a echoué";
                    header('Location: inscription.php');
                    exit();
                }
            }
        }
    }
?>

<title>Inscription</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

<link rel="stylesheet" href="inscription.css">
<section class="my-1 py-1">
    <div class="container text-center mt-1 pt-5">
        <h2 class="form-weight bold">Inscription</h2>
    </div>
    <form id="register-form" action="inscription.php" method="post">
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

        <?php
        if (isset($_SESSION['er'])) {?>
        <div class="mt-5 alert alert-danger">
            <?php
        echo '<p>' . $_SESSION['er'] . '</p>';
            unset($_SESSION['er']);?>
        </div>
        <?php } ?>
        <?php if (isset($_SESSION['e'])) {?>
        <div class="mt-5 alert alert-danger">
            <?php echo '<p>' . $_SESSION['e'] . '</p>';
            unset($_SESSION['e']);?>
        </div>
        <?php } ?>
        <?php if (isset($_SESSION['r'])) {?>
        <div class="mt-5 alert alert-danger">
            <?php echo '<p>' . $_SESSION['r'] . '</p>';
            unset($_SESSION['r']);?>
        </div>
        <?php } ?>
        </div>
        <div class="form-group">
            <label for="prenom" class="form-label"
                   aria-describedby="firstnameHelp">Prenom</label>
            <input name="prenom" id="prenom" type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nom" class="form-label"
                   aria-describedby="lastnameHelp">Nom</label>
            <input name="nom" id="nom" type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="sexe" class="form-label" aria-describedby="sexe">Sexe</label>
            <select name="sexe" class="form-control" aria-label="Sexe">
                <option>M</option>
                <option>F</option>
            </select>
        </div>
        <div class="form-group">
            <label for="email" class="form-label"
                   aria-describedby="emailHelp">Couriel</label>
            <input name="couriel" id="email" type="email" class="form-control" required>
            <div class="form-text" id="infoHelp">
                Nous n'allons partager votre email à personne.
            </div>
        </div>
        <div class="form-group">
            <label for="login" class="form-label"
                   aria-describedby="logHelp">Login</label>
            <input name="login" id="login" type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password" class="form-label"
                   aria-describedby="passwordHelp">Mot de passe</label>
            <input name="mdp" id="password" type="password" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="confirmpassword" class="form-label"
                   aria-describedby="passwordHelp">Confirmez le mot de passe</label>
            <input name="confirm_mdp" id="confirmpassword" type="password" class="form-control" required>
        </div>
        <div class="mb-3 form-group">
            <label for="tel" class="form-label"
                   aria-describedby="telHelp">Telephone</label>
            <input name="tel" id="tel" type="number" class="form-control" required>
        </div>

        <div class="form-group">
            <select name="nation" class="form-control"
                    aria-label="Nationnalité">
                <option>Selectionnez-votre nationalité!</option>
                <option value="AFGHAN">AFGHAN</option>
                <option value="ALBANIAN">ALBANIAN</option>
                <option value="ALGERIAN">ALGERIAN</option>
                <option value="AMERICAN">AMERICAN</option>
                <option value="ANDORRAN">ANDORRAN</option>
                <option value="ANGOLAN">ANGOLAN</option>
                <option value="ANTIGUANS">ANTIGUANS</option>
                <option value="ARGENTINEAN">ARGENTINEAN</option>
                <option value="ARMENIAN">ARMENIAN</option>
                <option value="AUSTRALIAN">AUSTRALIAN</option>
                <option value="AUSTRIAN">AUSTRIAN</option>
                <option value="AZERBAIJANI">AZERBAIJANI</option>
                <option value="BAHAMIAN">BAHAMIAN</option>
                <option value="BAHRAINI">BAHRAINI</option>
                <option value="BANGLADESHI">BANGLADESHI</option>
                <option value="BARBADIAN">BARBADIAN</option>
                <option value="BARBUDANS">BARBUDANS</option>
                <option value="BATSWANA">BATSWANA</option>
                <option value="BELARUSIAN">BELARUSIAN</option>
                <option value="BELGIAN">BELGIAN</option>
                <option value="BELIZEAN">BELIZEAN</option>
                <option value="BENINESE">BENINESE</option>
                <option value="BHUTANESE">BHUTANESE</option>
                <option value="BOLIVIAN">BOLIVIAN</option>
                <option value="BOSNIAN">BOSNIAN</option>
                <option value="BRAZILIAN">BRAZILIAN</option>
                <option value="BRITISH">BRITISH</option>
                <option value="BRUNEIAN">BRUNEIAN</option>
                <option value="BULGARIAN">BULGARIAN</option>
                <option value="BURKINABE">BURKINABE</option>
                <option value="BURMESE">BURMESE</option>
                <option value="BURUNDIAN">BURUNDIAN</option>
                <option value="CAMBODIAN">CAMBODIAN</option>
                <option value="CAMEROONIAN">CAMEROONIAN</option>
                <option value="CANADIAN">CANADIAN</option>
                <option value="CAPE VERDEAN">CAPE VERDEAN</option>
                <option value="CENTRAL AFRICAN">CENTRAL AFRICAN</option>
                <option value="CHADIAN">CHADIAN</option>
                <option value="CHILEAN">CHILEAN</option>
                <option value="CHINESE">CHINESE</option>
                <option value="COLOMBIAN">COLOMBIAN</option>
                <option value="COMORAN">COMORAN</option>
                <option value="CONGOLESE">CONGOLESE</option>
                <option value="COSTA RICAN">COSTA RICAN</option>
                <option value="CROATIAN">CROATIAN</option>
                <option value="CUBAN">CUBAN</option>
                <option value="CYPRIOT">CYPRIOT</option>
                <option value="CZECH">CZECH</option>
                <option value="DANISH">DANISH</option>
                <option value="DJIBOUTI">DJIBOUTI</option>
                <option value="DOMINICAN">DOMINICAN</option>
                <option value="DUTCH">DUTCH</option>
                <option value="EAST TIMORESE">EAST TIMORESE</option>
                <option value="ECUADOREAN">ECUADOREAN</option>
                <option value="EGYPTIAN">EGYPTIAN</option>
                <option value="EMIRIAN">EMIRIAN</option>
                <option value="EQUATORIAL GUINEAN">EQUATORIAL GUINEAN
                </option>
                <option value="ERITREAN">ERITREAN</option>
                <option value="ESTONIAN">ESTONIAN</option>
                <option value="ETHIOPIAN">ETHIOPIAN</option>
                <option value="FIJIAN">FIJIAN</option>
                <option value="FILIPINO">FILIPINO</option>
                <option value="FINNISH">FINNISH</option>
                <option value="FRENCH">FRENCH</option>
                <option value="GABONESE">GABONESE</option>
                <option value="GAMBIAN">GAMBIAN</option>
                <option value="GEORGIAN">GEORGIAN</option>
                <option value="GERMAN">GERMAN</option>
                <option value="GHANAIAN">GHANAIAN</option>
                <option value="GREEK">GREEK</option>
                <option value="GRENADIAN">GRENADIAN</option>
                <option value="GUATEMALAN">GUATEMALAN</option>
                <option value="GUINEA-BISSAUAN">GUINEA-BISSAUAN</option>
                <option value="GUINEAN">GUINEAN</option>
                <option value="GUYANESE">GUYANESE</option>
                <option value="HAITIAN">HAITIAN</option>
                <option value="HERZEGOVINIAN">HERZEGOVINIAN</option>
                <option value="HONDURAN">HONDURAN</option>
                <option value="HUNGARIAN">HUNGARIAN</option>
                <option value="ICELANDER">ICELANDER</option>
                <option value="INDIAN">INDIAN</option>
                <option value="INDONESIAN">INDONESIAN</option>
                <option value="IRANIAN">IRANIAN</option>
                <option value="IRAQI">IRAQI</option>
                <option value="IRISH">IRISH</option>
                <option value="ISRAESLI">ISRAELI</option>
                <option value="ITALIAN">ITALIAN</option>
                <option value="IVORIAN">IVORIAN</option>
                <option value="JAMAICAN">JAMAICAN</option>
                <option value="JAPANESE">JAPANESE</option>
                <option value="JORDANIAN">JORDANIAN</option>
                <option value="KAZAKHSTANI">KAZAKHSTANI</option>
                <option value="KENYAN">KENYAN</option>
                <option value="KITTIAN AND NEVISIAN">KITTIAN AND NEVISIAN
                </option>
                <option value="KUWAITI">KUWAITI</option>
                <option value="KYRGYZ">KYRGYZ</option>
                <option value="LAOTIAN">LAOTIAN</option>
                <option value="LATVIAN">LATVIAN</option>
                <option value="LEBANESE">LEBANESE</option>
                <option value="LIBERIAN">LIBERIAN</option>
                <option value="LIBYAN">LIBYAN</option>
                <option value="LIECHTENSTEINER">LIECHTENSTEINER</option>
                <option value="LITHUANIAN">LITHUANIAN</option>
                <option value="LUXEMBOURGER">LUXEMBOURGER</option>
                <option value="MACEDONIAN">MACEDONIAN</option>
                <option value="MALAGASY">MALAGASY</option>
                <option value="MALAWIAN">MALAWIAN</option>
                <option value="MALAYSIAN">MALAYSIAN</option>
                <option value="MALDIVAN">MALDIVAN</option>
                <option value="MALIAN">MALIAN</option>
                <option value="MALTESE">MALTESE</option>
                <option value="MARSHALLESE">MARSHALLESE</option>
                <option value="MAURITANIAN">MAURITANIAN</option>
                <option value="MAURITIAN">MAURITIAN</option>
                <option value="MEXICAN">MEXICAN</option>
                <option value="MICRONESIAN">MICRONESIAN</option>
                <option value="MOLDOVAN">MOLDOVAN</option>
                <option value="MONACAN">MONACAN</option>
                <option value="MONGOLIAN">MONGOLIAN</option>
                <option value="MOROCCAN">MOROCCAN</option>
                <option value="MOSOTHO">MOSOTHO</option>
                <option value="MOTSWANA">MOTSWANA</option>
                <option value="MOZAMBICAN">MOZAMBICAN</option>
                <option value="NAMIBIAN">NAMIBIAN</option>
                <option value="NAURUAN">NAURUAN</option>
                <option value="NEPALESE">NEPALESE</option>
                <option value="NEW ZEALANDER">NEW ZEALANDER</option>
                <option value="NI-VANUATU">NI-VANUATU</option>
                <option value="NICARAGUAN">NICARAGUAN</option>
                <option value="NIGERIEN">NIGERIEN</option>
                <option value="NORTH KOREAN">NORTH KOREAN</option>
                <option value="NORTHERN IRISH">NORTHERN IRISH</option>
                <option value="NORWEGIAN">NORWEGIAN</option>
                <option value="OMANI">OMANI</option>
                <option value="PAKISTANI">PAKISTANI</option>
                <option value="PALAUAN">PALAUAN</option>
                <option value="PANAMANIAN">PANAMANIAN</option>
                <option value="PAPUA NEW GUINEAN">PAPUA NEW GUINEAN</option>
                <option value="PARAGUAYAN">PARAGUAYAN</option>
                <option value="PERUVIAN">PERUVIAN</option>
                <option value="POLISH">POLISH</option>
                <option value="PORTUGUESE">PORTUGUESE</option>
                <option value="QATARI">QATARI</option>
                <option value="ROMANIAN">ROMANIAN</option>
                <option value="RUSSIAN">RUSSIAN</option>
                <option value="RWANDAN">RWANDAN</option>
                <option value="SAINT LUCIAN">SAINT LUCIAN</option>
                <option value="SALVADORAN">SALVADORAN</option>
                <option value="SAMOAN">SAMOAN</option>
                <option value="SAN MARINESE">SAN MARINESE</option>
                <option value="SAO TOMEAN">SAO TOMEAN</option>
                <option value="SAUDI">SAUDI</option>
                <option value="SCOTTISH">SCOTTISH</option>
                <option value="SENEGALESE">SENEGALESE</option>
                <option value="SERBIAN">SERBIAN</option>
                <option value="SEYCHELLOIS">SEYCHELLOIS</option>
                <option value="SIERRA LEONEAN">SIERRA LEONEAN</option>
                <option value="SINGAPOREAN">SINGAPOREAN</option>
                <option value="SLOVAKIAN">SLOVAKIAN</option>
                <option value="SLOVENIAN">SLOVENIAN</option>
                <option value="SOLOMON ISLANDER">SOLOMON ISLANDER</option>
                <option value="SOMALI">SOMALI</option>
                <option value="SOUTH AFRICAN">SOUTH AFRICAN</option>
                <option value="SOUTH KOREAN">SOUTH KOREAN</option>
                <option value="SPANISH">SPANISH</option>
                <option value="SRI LANKAN">SRI LANKAN</option>
                <option value="SUDANESE">SUDANESE</option>
                <option value="SURINAMER">SURINAMER</option>
                <option value="SWAZI">SWAZI</option>
                <option value="SWEDISH">SWEDISH</option>
                <option value="SWISS">SWISS</option>
                <option value="SYRIAN">SYRIAN</option>
                <option value="TAIWANESE">TAIWANESE</option>
                <option value="TAJIK">TAJIK</option>
                <option value="TANZANIAN">TANZANIAN</option>
                <option value="THAI">THAI</option>
                <option value="TOGOLESE">TOGOLESE</option>
                <option value="TONGAN">TONGAN</option>
                <option value="TRINIDADIAN OR TOBAGONIAN">TRINIDADIAN OR
                    TOBAGONIAN</option>
                <option value="TUNISIAN">TUNISIAN</option>
                <option value="TURKISH">TURKISH</option>
                <option value="TUVALUAN">TUVALUAN</option>
                <option value="UGANDAN">UGANDAN</option>
                <option value="UKRAINIAN">UKRAINIAN</option>
                <option value="URUGUAYAN">URUGUAYAN</option>
                <option value="UZBEKISTANI">Uzbekistani</option>
                <option value="VENEZUELAN">VENEZUELAN</option>
                <option value="VIETNAMESE">VIETNAMESE</option>
                <option value="WELSH">WELSH</option>
                <option value="YEMENITE">YEMENITE</option>
                <option value="ZAMBIAN">ZAMBIAN</option>
                <option value="ZIMBABWEAN">ZIMBABWEAN</option>
            </select>
        </div>

        <div class="form-group">
            <a href="#" class="form-link"
               aria-describedby="conditionsHelp">Lisez les conditions générales!</a>
        </div>

        <div class="form-group form-check">
            <input name="checkbox" type="checkbox" class="form-control form-check-input" id="checkbox" required>
            <label for="checkbox" class="form-check-label">Je suis d'accord avec les conditions générales.</label>
        </div>

        <div class=" form-group">
            <input name="inscription" id="register-btn" class="btn btn-info" type="submit" value="S'inscrire">
        </div>
        <div class=" form-group">
            <a href="connexion.php" id="login-url" class="text-warning" class="btn">Vous avez dejà un compte? Se connecter</a>
        </div>
    </form>
</section>
