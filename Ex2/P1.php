<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
    <form action="p2.php" method="post">
    <fieldset>
         <legend>Saisissez vos coordonnées</legend>
            
            <label for="nss">Numéro de Sécurité Sociale (8 chiffres):</label>
            <input type="number" id="nss" name="nss" required maxlength="8">
            
            <label for="caisse">Caisse:</label>
            <select id="caisse" name="caisse">
                <option value="CNSS">CNSS</option>
                <option value="CNRPS">CNRPS</option>
            </select>
        <br><br>
        <label>Nom</label>
        <input type="text" name="nom">
        <br><br>
        <label>prenom</label>
        <input type="text" name="prenom">
        <br><br>
        <label >Adresse</label>
        <input type="text" name="adresse">
        <br><br>
        <label >Ville</label>
        <input type="text" name="ville">
        <br><br>
        <label for="code_postal">Code Postal:</label>
            <input type="number" id="code_postal" name="code_postal" required>
        <br><br>
        <label>CONFIRMER</label>
        <input type="submit" value="GO!" name="confirmer">

    </fieldset>
    
</body>
</html>