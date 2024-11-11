<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Confirmation de vos coordonnées</title>
    <link rel="stylesheet" href="stylesp2.css">
</head>
<body>
    <div>
        <h1>Confirmation de vos coordonnées</h1>
    
    <table>
        <tr>
            <th>Champs</th>
            <th>Valeur</th>
        </tr>
        <tr>
            <td>nss</td>
            <td><?php echo htmlspecialchars($_POST['nss']); ?></td>
        </tr>
        <tr>
            <td>Caisse</td>
            <td><?php echo htmlspecialchars($_POST['caisse']);?></td>

        </tr>
        <tr>
            <td>Nom</td>
            <td><?php echo htmlspecialchars($_POST['nom']) ;?></td>
        </tr>
        <tr>
            <td>Prenom</td>
            <td><?php echo htmlspecialchars($_POST['prenom']); ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo htmlspecialchars($_POST['adresse']); ?></td>
        </tr>
        <tr>
            <td>Ville</td>
            <td><?php echo htmlspecialchars($_POST['ville']); ?></td>
        </tr>
        <tr>
            <td>Code postal</td>
            <td><?php echo htmlspecialchars($_POST['code_postal']) ;?></td>
        </tr>
    </table>
    </div>
</body>
</html>
