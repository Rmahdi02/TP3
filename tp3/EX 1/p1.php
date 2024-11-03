<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="styles.css">
   
</head>
<body>
<div class="container">
<form action="p2.php"method="post">
    <fieldset>
        <legend>Formulaire</legend>
        <label >Civilité :</label>
        <input type="radio" name="civ" value="M">M
        <input type="radio" name="civ" value="Mme">Mme
        <input type="radio" name="civ" value="Mlle">Mlle
        <br><br>

        <label >Nom :</label>
        <input type="text" name="nom">
        <br><br>
        <label >Prénom:</label>
        <input type="text" name="prenom">
        <br><br>
        <label >Mail</label>
        <input type="email" name="mail">
        <br><br>
        <label >Tel</label>
        <input type="tel" name="tel">
        <br><br>
        <label >Fax</label>
        <input type="tel" name="fax">
        <br><br>
        <label >Niveau d'étude: </label>
        <select name="niveau" >
            <option value="Bac">Bac</option>
            <option value="Licence">Licence</option>
            <option value="Master">Master</option>
            <option value="Doctoret">Doctoret</option>

        </select>
        <br><br>
        <label >Hobbies:</label> <br>
        <input type="checkbox" name="hobbies[]" value="Musique">Musique <br>
        <input type="checkbox" name="hobbies[]" value="Lecture">Lecture <br>
        <input type="checkbox" name="hobbies[]" value="Foot">Foot <br>
        <input type="checkbox" name="hobbies[]" value="Autre">Autre <br>
        <input type="text" name="hobbies_autre">
        <br><br>
        <input type="submit" value="GO!">

    </fieldset>


</form>

    
</body>
</html>