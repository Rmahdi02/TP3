<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>


<h2>Informations soumises</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<p>Civilité: " . htmlspecialchars($_POST['civ']) . "</p>";
    echo "<p>Nom: " . htmlspecialchars($_POST['nom']) . "</p>";
    echo "<p>Prénom: " . htmlspecialchars($_POST['prenom']) . "</p>";
    echo "<p>Mail: " . htmlspecialchars($_POST['mail']) . "</p>";
    echo "<p>Tel: " . htmlspecialchars($_POST['tel']) . "</p>";
    echo "<p>Fax: " . htmlspecialchars($_POST['fax']) . "</p>";
    echo "<p>Niveau d'étude: " . htmlspecialchars($_POST['niveau']) . "</p>";
    
    echo "<p>Hobbies:</p>";
    if (isset($_POST['hobbies'])) {
        foreach ($_POST['hobbies'] as $hobby) {
            echo "<li>" . htmlspecialchars($hobby) . "</li>";
        }
    }
    if (!empty($_POST['hobbies_autre'])) {
        echo "<li>Autre: " . htmlspecialchars($_POST['hobbies_autre']) . "</li>";
    }
}
?>

</body>
</html>
