<!DOCTYPE html>
<html>
<head>
    <title>Affichage en temps réel des données de la base de données</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            setInterval(function() {
                $.ajax({
                    url: "ajaxtest.php", // Le fichier PHP qui récupère les données
                    type: "GET",
                    success: function(data) {
                        $("#resultat").html(data); // Affichage des données dans un élément avec l'ID "resultat"
                    }
                });
            }, 1000); // Rafraîchissement toutes les 1 seconde (ajustez la valeur selon vos besoins)
        });
    </script>
</head>
<body>
    <div id="resultat"></div> <!-- L'endroit où les données seront affichées -->
</body>
</html>
