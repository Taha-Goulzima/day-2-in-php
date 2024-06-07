<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat</title>
</head>
<body>

<h2>Résultat du formulaire</h2>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $matricule = $_POST['matricule'];
        $nom = $_POST['nom'];
        $date_embauche = new DateTime($_POST['date_embauche']);
        $genre = $_POST['genre'];
        $today = new DateTime('today');
        $anciennete = $today->diff($date_embauche)->y;

        echo "<p>Ton matricule est : $matricule </p>";
        echo "<p>Ton nom est : $nom</p>";
        echo "<p>Ton ancienneté est : $anciennete ans</p>";
        echo "<p>Ton genre est : $genre</p>";
    }
?>

</body>
</html>
