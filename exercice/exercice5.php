<!-- LES CONDITIONS  -->
<?php
    // exercice 1
    $var_a = 1;
    $var_b = 2;
    $result = ($var_a == $var_b) ? "Les nombres sont égaux" : "Les nombres ne sont pas égaux";
    echo $result;
    echo "<br>";

    //exercice 2
    $number = rand(-1, 1);
    if ($number > 0) {
        echo "Il est positif";
    } else if ($number < 0) {
        echo "Il est négatif";
    } else {
        echo "Le chiffre est 0";
    };
    echo "<br>";
    
    // exercice 3
    $yy = rand(1990, 2010);
    if ($yy % 4 == 0) {
        echo "C'est une année bissextile";
    } else {
        echo "Ce n'est pas une année bissextile";
    }
    echo "<br>";


    //exercice 4
    $age = rand(15, 25);
    $age_result = ($age >= 21) ? "Accès autorisé" : "Accès refusé";
    echo $age_result;
    echo "<br>";

    //exercice 5
    $number1 = rand(0, 100);
    $number2 = rand(0, 100);
    $number3 = rand(0, 100);
    if ($number1 >= $number2 && $number1 >= $number3) {
        echo "$number1 est le plus grand nombre.";
    } elseif ($number2 >= $number1 && $number2 >= $number3) {
        echo "$number2 est le plus grand nombre.";
    } else {
        echo "$number3 est le plus grand nombre.";
    }
?>
<br><br><br><br><br><br><br><br><br><br>
<?php // exercice 1
    $jour = rand(1, 7);
    switch ($jour) {
        case 1 : 
            echo "Le jour est Lundi";
            break;
        case 2 : 
            echo "Le jour est Mardi";
            break;
        case 3 : 
            echo "Le jour est Mercredi";
            break; 
        case 4 : 
            echo "Le jour est Jeudi";
            break;
        case 5 : 
            echo "Le jour est Vendredi";
            break;
        case 6 : 
            echo "Le jour est Samedi";
            break;
        default : 
            echo "Dimanche n'est pas un jour de travail !";
            break;
    }
    echo "<br>";

    $colors = rand(1, 7);
    switch ($colors) {
        case 1 : 
            echo "La couleur est Jaune";
            break;
        case 2 : 
            echo "La couleur est Bleu";
            break;
        case 3 : 
            echo "La couleur est Rouge";
            break; 
        case 4 : 
            echo "La couleur est Noir";
            break;
        case 5 : 
            echo "La couleur est Orange";
            break;
        case 6 : 
            echo "La couleur est Violet";
            break;
        case 7 : 
            echo "La couleur est Vert";
            break;
    }
    echo "<br>";

        //exercice 3
        $math1 = rand(1, 150);
        $math2 = rand(1, 2500);
        $math = rand(1, 5);
    switch ($math) {
        case 1 : 
            $sum = $math1 + $math2;
            echo "La somme de $math1 + $math2 = $sum";
            break;
        case 2 : 
            $sous = $math1 - $math2;
            echo "La somme de $math1 - $math2 = $sous";
            break;
        case 3 : 
            $mult = $math1 * $math2;
            echo "La somme de $math1 * $math2 = $mult";
            break; 
        case 4 : 
            $div = $math1 / $math2;
            echo "La somme de $math1 / $math2 = $div";
            break;
        case 5 : 
            $modulo = $math1 % $math2;
            echo "La somme de $math1 % $math2 = $modulo";
            break;
        }
    echo "<br>";

    //exercice 4
    $month = rand(1, 12);
    switch ($month) {
        case 1 : 
            echo "Le mois est Janvier";
            break;
        case 2 : 
            echo "Le mois est Fevrier";
            break;
        case 3 : 
            echo "Le mois est Mars";
            break; 
        case 4 : 
            echo "Le mois est Avril";
            break;
        case 5 : 
            echo "Le mois est Mai";
            break;
        case 6 : 
            echo "Le mois est Juin";
            break;
        case 7 : 
            echo "Le mois est Juillet";
            break;
        case 8 :
            echo "Le mois est Aout";
            break;
        case 9 :
            echo "Le mois est Septembre";
            break;
        case 10 :
            echo "Le mois est Octobre";
            break;
        case 11 :
            echo "Le mois est Novembre";
            break;
        case 12 :
            echo "Le mois est Décembre";
            break;
    }
    echo "<br>";

    //exercice 5
    $day = rand(1, 3);
    switch ($day) {
        case 1 :
            echo "Janvier, Mars , Mai, Juillet, Aout, Octobre et Décembre ont 31 jours !";
            break;
        case 3 :
            echo "Avril, Juin, Septembre et Novembre ont 30 jours !";
            break;
        case 2 :
            echo "Février a 29 jours !";
            break;
    }
    echo "<br>";
?>
