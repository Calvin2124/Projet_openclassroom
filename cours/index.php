<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Comment faire ceci "|" il faut faire option + shift + L</h1>
    <?php 
        // les balises php se marque comme une simple balise exmple <?php ....? > sans l'espace
        // Pour déclarer une variable il faut mettre le dollar et ensuite mettre le nom de la variable
        $titre = "Mon site Web";
        // echo signifie afficher comme le "console.log ou le print en python 
        echo "<h1>" . $titre . "</h1>";
        echo "<p>Bienvenue sur notre site web. Nous sommes ravis de vous acceuillir !!!!!</p>";
    ?>
    <?php
        $age = 25; // stock l'age de la personne 25
        $nom = "Jean"; // variable avec une chaïne de caractère
        $est_etudiant = true; // variable qui stock un booleen 
        $salaire = 50000; // variable qui stock le salaire
        echo "Mon salaire est : " . $salaire .  "" . $age . " euros par an.";
    ?>
    <?php
        $produit = "stylo";
        echo "<p>Mon produit péféré est un : $produit </p>";
    ?>

    <?php // comment additionner des variables il existe aussi le * pour multiplier le - pour soustraire le / pour diviser 
        $nombre_1 = 21;
        $nombre_2 = 22;
        $sum = $nombre_1 + $nombre_2;
        echo "<p>La somme des deux nombres est : $sum</p>";
    ?>

    <?php
        $nombre_1 = 21;
        $nombre_2 = 22;
        $sum = $nombre_1 + $nombre_2;
        $moyenne = ($nombre_1 + $nombre_2) / 2; // calcul de la moyenne 
        $pourcentage = (($nombre_1 + $nombre_2) * 100) / 2 ; // le pourcentage
        echo "<p>La somme des deux nombres est : $sum</p>";
        echo "<p>La moyenne des deux nombres est : $moyenne</p>";
        echo "<p>La moyenne des deux nombres est : $pourcentage %</p>";
    ?>

    <!-- LES TABLEAUX  -->
    <?php
        // définir un tableau 
        $mon_tableau[0] = 12;
        $mon_tableau[1] = 15;
        $mon_tableau[2] = 14;
        $mon_tableau[3] = 13;
        $mon_tableau[4] = "Une chaïne de caractères";

        echo $mon_tableau[2]; // affiche : 14
        echo "<br>";

        $mon_tableau[2] = 18; // modifie la valeur actuelle par 18
        echo $mon_tableau[2]; // affiche : 18
        echo "<br>";
        $tab = array(12, 15, 14, 13);

        echo $tab[1]; // affichera 15
        echo "<br>";

        // LES DICTIONNAIRES 
        $notes["Jules"] = 12;
        $notes["Maxence"] = 15;
        $notes["Seb"] = 14;
        $notes["Coumba"] = 13;

        $note = array(
            "Jules" => 12, 
            "Maxence" => 15,
            "Seb" => 14,
            "Coumba" => 13,
        );
    ?>

    <!-- TABLEAU PERMUTATION -->
    
    <?php
        $var_a = 12;
        $var_b = 1;
        echo "var_a = $var_a, var_b = $var_b";
        echo "<br>";
        // permuter les 2 valeurs sans utiliser une troisièmes variable 
        [$var_a, $var_b] = [$var_b, $var_a];
        echo "var_a = $var_a, var_b = $var_b";
    ?>
    <br>
    <!-- ON PEUT ASSIGNER LA CLE DIRECT DANS UNE VARIABLE COMME CECI -->
    <?php
        $notes = array(
            "Jules" => 12,
            "Maxence" => 15,
            "Seb" => 14,
            "Coumba" => 13
        );
        
        list($jules, $maxence, $seb, $coumba) = $notes;
        echo $jules; // Affichera 12
        echo "<br>";
    ?>

    <!-- AFFICHER LES DONNÉES DANS UN TABLEAU EN RECHERCHANT AVEC LE NOM DE LA CLÉ  -->
    <?php
        $donnees = "cle2"; // La valeur de la variable 
        $tableau = [
            "cle1" => "Valeur 1",
            "cle2" => "Valeur 2", 
            "cle3" => "Valeur 3"
        ];
        if (array_key_exists($donnees, $tableau)) {
            echo "Contenu pour la clé $donnees : $tableau[$donnees]";
        } else{
            echo "Clé non trouvée dans le tableau.";
        }
    ?>   

    <!-- ********** LES OPERATEURS LOGIQUES **************** -->
    <!-- AND && ET| OR || OU-->






    <!-- LES CONDITIONS EN PHP -->
    <?php
// Condition avec if
$age = 18;

if ($age >= 18) {
    echo "Vous êtes majeur.";
}

// Condition avec if et else
$age = 19;

if ($age >= 18) {
    echo "Vous êtes majeur.";
} else {
    echo "Vous êtes mineur.";
}

// If elseif else

$note = 12;

if ($note >= 16) {
    echo "Très bien.";
} elseif ($note >= 12) {
    echo "Bien.";
} else {
    echo "Insuffisant.";
}

//  Switch

$jour = "lundi";

switch ($jour) {
    case "lundi":
        echo "C'est le début de la semaine.";
        break;
    case "vendredi":
        echo "C'est presque le week-end.";
        break;
    default:
        echo "C'est un autre jour de la semaine.";

}

// Condition ternaire

$age = 20;

$resultat = ($age >= 18) ? "Majeur" : "Mineur";
echo $resultat; // Affichera "Majeur"
    ?>



<!-- RECUPÉRER DES DONNÉES D'UN FORMULAIRE -->

<?php // utiliser get dans la method dans le <form> et action = la page qui récupère
    $nom = $_POST["nom"];
    echo "Bonjour, $nom";
?>

<?php
    // Permet de tester si une variable existe 
    isset($ma_variable);

    // Permet de tester si une variable est vide 
    empty($ma_variable);

    //Tester si la variable n'est pas vide
    !empty($ma_variable);
?>

<!-- LES BOUCLES EN PHP -->

<?php
    for ($i = 0; $i < 5; $i++) {
        // POUR i = 0 si i inférieur a 5 on incrémente 1 a i
        // La boucle se relance jusqu'a ce que 5 soit atteint
        echo "La valeur de \$i est : $i <br>";
    };

    $i = 0;
    // Pour les boucles while il faut amorçer i avant 
    while ($i < 5) {
        // TANT QUE i est inférieur a 5 on fait la consigne 
    echo "La valeur de \$i est : $i <br>";
    // a la fin ne pas oublier d'incrémenter i pour ne pas faire une boucle infinie 
    $i++;
};
    $i = 0;
    // Pour les boucles while il faut amorçer i avant 
    do {
        echo "La valeur de \$i est : $i <br>";
        $i++;
    } while ($i < 5);

    // PARCOURIR DES TABLEAUX AVEC DES BOUCLES
    $colors = array("rouge", "vert", "bleu");
    // nom du tableau $colors et il contient "rouge", "vert", "bleu".
    foreach ($colors as $color) {
        //Pour version tableau (dans $colors toutes les valeurs parcourus vont etre stockés dans $color)
        echo "$color <br>";
        // Affiche les données du tableau qui sont affichés dans la variable $color
};
$personne = array("nom" => "Jean", "âge" => 30);
// personne est un dictionnaire qui contient la clé "nom" et "age"
// les clès contiennent respctivement "nom" = "Jean" et "age" = 30.
foreach ($personne as $cle => $valeur) {
    //dans cette boucle on va parcourir tableau qui va stocké toutes les clés dans $cle et la valeur des clés dans $valeur
    echo "$cle : $valeur <br>";
    // Affiche le nom des clés et leurs valeurs associés
}   
?>
</body>
</html>