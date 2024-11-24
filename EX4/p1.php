<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul TVA</title>
</head>
<body>
    <h1>Saisissez le prix HT et le taux de TVA</h1>

    <?php
    // Initialize variables
    $prix_ht = '';
    $taux_tva = '';
    $montant_tva = '';
    $prix_ttc = '';

    // Check if form is submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Retrieve and sanitize input
        $prix_ht = isset($_POST['prix_ht']) ? trim($_POST['prix_ht']) : '';
        $taux_tva = isset($_POST['taux_tva']) ? trim($_POST['taux_tva']) : '';

        // Validate input
        if (empty($prix_ht) || empty($taux_tva)) {
            echo "<h3 style='color: red;'>Le formulaire est incomplet!</h3>";
        } elseif (!is_numeric($prix_ht) || !is_numeric($taux_tva)) {
            echo "<h3 style='color: red;'>Veuillez saisir des valeurs numériques pour le prix HT et le taux de TVA.</h3>";
        } else {
            // Calculate Montant TVA and Prix TTC
            $montant_tva = ($prix_ht * $taux_tva) / 100;
            $prix_ttc = $prix_ht + $montant_tva;
        }
    }
    ?>

    <!-- Display the form -->
    <form method="post" action="">
        <label for="prix_ht">Prix Hors Taxes :</label>
        <input type="text" id="prix_ht" name="prix_ht" value="<?php echo htmlspecialchars($prix_ht); ?>"><br><br>

        <label for="taux_tva">Taux de TVA (en %) :</label>
        <input type="text" id="taux_tva" name="taux_tva" value="<?php echo htmlspecialchars($taux_tva); ?>"><br><br>

        <?php if (!empty($montant_tva) && !empty($prix_ttc)) { ?>
            <label for="montant_tva">Montant de la TVA :</label>
            <input type="text" id="montant_tva" value="<?php echo number_format($montant_tva, 2, '.', ''); ?>" readonly><br><br>

            <label for="prix_ttc">Prix TTC :</label>
            <input type="text" id="prix_ttc" value="<?php echo number_format($prix_ttc, 2, '.', ''); ?>" readonly><br><br>
        <?php } ?>

        <button type="submit">ENVOI</button>
    </form>
</body>
</html>
