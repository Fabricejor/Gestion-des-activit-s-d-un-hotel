<?php
// Informations de connexion à la base de données
$serveur = "localhost"; // Adresse du serveur MySQL
$utilisateur = "root"; // Nom d'utilisateur MySQL
$motDePasse = ""; // Mot de passe MySQL
$baseDeDonnees = "couture"; // Nom de la base de données

// Connexion à la base de données
$mysqli = new mysqli($serveur, $utilisateur, $motDePasse, $baseDeDonnees);

// Vérifier la connexion
if ($mysqli->connect_error) {
    die("La connexion à la base de données a échoué : " . $mysqli->connect_error);
}

// Récupérer les données de la base de données
$resultat = $mysqli->query("SELECT * FROM client");

// Générer le code HTML pour afficher les données
$html = "";
if ($resultat->num_rows > 0) {
    while ($row = $resultat->fetch_assoc()) {
        $html .= "ID : " . $row["id_client"] . ", Nom : " . $row["nom"] . "<br>";
    }
} else {
    $html = "Aucun résultat trouvé.";
}

// Fermer la connexion
$mysqli->close();

// Renvoyer les données au format HTML
echo $html;
?>
