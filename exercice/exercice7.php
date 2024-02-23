<?php //exercice 1
    $user_name1 = $_POST["test1"];
    $user_name2 = $_POST["test2"];
    $result = ($user_name1 == $user_name2) ? "Les nombres sont égaux" : "Les nombres ne sont pas égaux";
    echo $result;
    echo "<br>";
?>

<?php // exercice 2
    $user_number1 = $_POST["test_valeur1"];
    $user_number2 = $_POST["test_valeur2"];
    if ($user_number1 > 0) {
        echo "Me chiffre 1 est positif";
    } else if ($user_number1 < 0)  {
        echo "Le chiffre 1 est négatif";
    } else {
        echo "Le chiffre 1 est 0";
    };
    echo "<br>";
    if ($user_number2 > 0) {
        echo "Me chiffre 2 est positif";
    } else if ($user_number2 < 0)  {
        echo "Le chiffre 2 est négatif";
    } else {
        echo "Le chiffre 2 est 0";
    };
    echo "<br>";
?>

<?php // exercice 3
    $yy = $_POST["years"];
    $annees = ($yy % 4 == 0) ? "C'est une année bissextile" :"Ce n'est pas une année bissextile";
    echo $annees;
    echo "<br>";
?>

<?php //exercice 4   
    $age = $_POST["age"];
    $age_result = ($age >= 21) ? "Accès autorisé" : "Accès refusé";
    echo $age_result;
    echo "<br>";
?>

<?php //exercice 5
    //exercice 5
    $number1 = $_POST["plus_grand"];
    $number2 = $_POST["plus_grand1"];
    $number3 = $_POST["plus_grand2"];
    if ($number1 >= $number2 && $number1 >= $number3) {
        echo "$number1 est le plus grand nombre.";
    } elseif ($number2 >= $number1 && $number2 >= $number3) {
        echo "$number2 est le plus grand nombre.";
    } else {
        echo "$number3 est le plus grand nombre.";
    }
?>


