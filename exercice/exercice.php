<!-- MANIPULER LES VARIABLES ET FAIRE DES APPELS ECHO -->


<?php // exercice 1
    $age = 22;
    echo "Mon age est : " . $age . "";
?>

<?php // exercice 2
        $produit = "stylo";
        echo "<p>Mon produit péféré est un : $produit </p>";
    ?>

<?php // exercice 3
    $prix = 40;
    $devise = "€";
    echo "<p>Le prix de cette article est : $prix $devise</p>";
?>

<?php // exercice 4
    echo "<p>Bonjour le monde : $prix !</p>";
?>

<?php // exercice 5
    echo "<p>J'aime beaucoup dormir !</p>";
?>

<?php // exercice 6
    echo "<p>Merci d'avoir visité notre sit le sang de la veine !</p>";
?>

<?php // exercice 7
    $ville = "Dunkerque";
    echo "<p>Je rêve de visiter $ville un jour.</p>";
?>

<?php // exercice 8
    $plat = "Pizza";
    echo "<p>Le plat du jour est : $plat.</p>";
?>

<br><br><br><br><br><br><br><br><br><br><br>

<h1>exercice calcul</h1>
<?php // exercice 1
    $longueur = 30;
    $largeur = 29;
    $result = $longueur * $largeur;
    echo "<p>La surface du rectangle est : $result</p>";
?>

<?php // exercice 2
    $prix_ht = 53;
    $test = $prix_ht * 0.2; 
    $prix_ttc = $prix_ht + $test;
    echo "<p>Le prix ttc du produit est : $prix_ttc</p>";
?>

<?php // exercice 3
    $celcius = 29;
    $fahrenheit = $celcius * 9/5 + 32;
    echo "<p>La températuere en celcius est de : $celcius et la température en Fahrenheit est de : $fahrenheit.</p>";
?>

<?php // exercice 4
    $nombre1 = 45;
    $nombre2 = 21;
    $carre_de_nombre1 = $nombre1 * $nombre1;
    $carre_de_nombre2 = $nombre2 * $nombre2;
    echo "<p>Le carré de $nombre1 est : $carre_de_nombre1 et le carré de $nombre2 est : $carre_de_nombre2</p>";
    $soustraction = $carre_de_nombre1 - $nombre1;
    echo "<p>Le résultat de $carre_de_nombre1 - $nombre1 est : $soustraction.</p>";
    $pourcentage  = ($nombre2 * 100) / 2;
    echo "<p>$nombre2 est multiplié par 100 et le résultat de cette multiplication est divisé par 2 pour donner : $pourcentage.</p>";
    $fin_exercice = $soustraction + $pourcentage;
    echo"<p>La somme de l'étape 3 avec l'étape 4 est : $fin_exercice.</p>";
?>