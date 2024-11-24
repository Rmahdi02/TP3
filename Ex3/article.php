<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $reference = isset($_POST['reference']) ? trim($_POST['reference']) : '';
    $libelle = isset($_POST['libelle']) ? trim($_POST['libelle']) : '';
    $fournisseur = isset($_POST['fournisseur']) && is_array($_POST['fournisseur']) ? $_POST['fournisseur'] : [];
    $quantite = isset($_POST['quantite']) ? trim($_POST['quantite']) : '';
    $prix = isset($_POST['prix']) ? trim($_POST['prix']) : '';
    $point_de_vente = isset($_POST['point_de_vente']) ? $_POST['point_de_vente'] : [];

    // Validate inputs
    $errors = [];

    if (empty($reference) || empty($libelle) || empty($fournisseur) || empty($point_de_vente) || empty($prix) || empty($quantite)) {
        $errors[] = "Le formulaire est incomplet.";
    }

    if (!is_numeric($prix) || !is_numeric($quantite)) {
        $errors[] = "Le prix et la quantité doivent être des valeurs numériques.";
    }

    if (strlen($libelle) < 8) {
        $errors[] = "Le libellé doit contenir au moins 8 caractères.";
    }

    if (!preg_match('/^\d+(\.\d{1,2})?$/', $prix)) {
        $errors[] = "Le prix doit être une valeur avec jusqu'à deux chiffres après la virgule.";
    }

    // Display errors if any
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<h3 style='color: red;'>$error</h3>";
        }
        echo "<a href='article.html'>Retour au formulaire</a>";
        exit;
    }

    // Calculate total price
    $total = number_format($prix * $quantite, 2, '.', '');

    // Store data in a table
    $article = [
        'Référence' => $reference,
        'Libellé' => $libelle,
        'Fournisseurs' => implode(", ", $fournisseur),
        'Points de vente' => implode(", ", $point_de_vente),
        'Prix unitaire' => $prix,
        'Quantité' => $quantite,
        'Prix total' => $total
    ];

    // Display the data as a table
    echo "<h3>Informations sur l'article :</h3>";
    echo "<table border='1' cellspacing='0' cellpadding='10'>";
    foreach ($article as $key => $value) {
        echo "<tr><th>$key</th><td>" . htmlspecialchars($value) . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "<h3 style='color: red;'>Formulaire non soumis</h3>";
    echo "<a href='article.html'>Retour au formulaire</a>";
}
?>
