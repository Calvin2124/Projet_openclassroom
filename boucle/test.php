<?php
// Initialisation des variables
$nombreAleatoire = 7;
$nombreEssaisMax = 10;
$nombreEssais = 0;
$message = '';

// Traitement du formulaire lorsque celui-ci est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer la devinette soumise par l'utilisateur
    $devinette = (int) $_POST["devinette"];

    // Vérifier si la devinette est correcte
    while ($nombreEssais < $nombreEssaisMax) {
        $nombreEssais++;
        if ($devinette < $nombreAleatoire) {
            $message = "Trop petit ! Il vous reste " . ($nombreEssaisMax - $nombreEssais) . " essais.";
            break;
        } elseif ($devinette > $nombreAleatoire) {
            $message = "Trop grand ! Il vous reste " . ($nombreEssaisMax - $nombreEssais) . " essais.";
            break;
        } else {
            $message = "Bravo ! Vous avez deviné le nombre $nombreAleatoire en $nombreEssais essais !";
            break;
        }
    }

    // Si l'utilisateur a utilisé tous ses essais
    if ($nombreEssais == $nombreEssaisMax) {
        $message = "Désolé, vous avez utilisé tous vos essais. Le nombre à deviner était $nombreAleatoire.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Jeu de devinette</title>
</head>
<body>
    <h1>Jeu de devinette</h1>
    <p>Devinez un nombre entre 1 et 100. Vous avez droit à <?php echo $nombreEssaisMax; ?> essais.</p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="devinette">Votre devinette :</label>
        <input type="number" id="devinette" name="devinette" min="1" max="100" required>
        <button type="submit">Devinez</button>
    </form>
    <?php echo $message; ?>
</body>
</html>
