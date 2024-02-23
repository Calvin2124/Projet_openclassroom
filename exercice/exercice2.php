<!-- LES TABLEAUX -->

<?php // exercice 1
    $couleurs = array("rouge", "vert", "bleu");
    echo $couleurs[0];
    echo "<br>";
    echo $couleurs[1];
    echo "<br>";
    echo $couleurs[2];
    echo "<br>";
    //exercice 2
    $sujets = array("chien", "chat", "oiseau");
    $verbes = array("mange", "court", "chante");
    $sujet_aleatoire = $sujets[array_rand($sujets)];
    echo "<br>";
    $verbe_aleatoire = $verbes[array_rand($sujets)];
    echo "<br>";
    echo "$sujet_aleatoire,  $verbe_aleatoire";
    echo "<br>";
    // exercice 3
    $courses = array("pain", "lait", "œufs", "fruits"); 
    echo "$courses[0], $courses[1], $courses[2], $courses[3]. " // implode(", " $courses) au lieu de tout écrire comme un débile
    ?>
    <br>
<?php // exercice 1
    $pays = array(
        "France" => "Paris",
        "Thaïlande" => "Bangkok",
        "Irlande" => "Dublin", 
        "Japon" => "Tokyo"
    );
    
    echo "La valeur associée à la clé 'Irlande' est : " . $pays["Irlande"];
    echo "<br>";

    // exercice 2
    $amis = array(
        "Jules" => "jules@zzz.fr",
        "Anne" => "Anne@zzz.fr",
        "Jean" => "jean@zzz.fr",
        "Julien" => "julien@uwu.fr"
    );
    echo "Le mail de 'Jules' est : " . $amis["Julien"];
    echo "<br>";


    //exercice 3
    $commande = array(
        "stylo" => 4,
        "Bouteille d'eau" => 9,
        "Chaise" => 7
    );
    echo "Le nombre de chaise est : " . $commande["Chaise"];
    echo "<br>";

?>

<?php
    $var_a = 12;
    $var_b = 15;

    $var_c = $var_a;// 12
    $var_a = $var_b; // a = 15
    $var_b = $var_c; // b vaux 12
    echo "var_a vallait 12 et maintenant : $var_a et var_b vallait 15 et maintenant : $var_b.";
    echo "<br>";

?>