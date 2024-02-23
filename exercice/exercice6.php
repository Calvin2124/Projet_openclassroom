<!-- exercice 1 -->
<?php
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];
    $choix = $_POST['choix'];

    if ($choix == "option1") {
        $result = $number1 + $number2;
        echo "Le résultat de $number1 + $number2 est : $result";
    } else if ($choix == "option2") {
        $result = $number1 - $number2;
        echo "Le résultat de $number1 - $number2 est : $result";
        } else if ($choix == "option3") {
            $result = $number1 * $number2;
            echo "Le résultat de $number1 * $number2 est : $result";
            } else if ($choix == "option4") {
                $result = $number1 / $number2;
                echo "Le résultat de $number1 / $number2 est : $result";
            };
            echo "<br>";
?>

<!-- Exercice 2 -->

<?php
    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $password = $_POST["password"];
    echo "Bienvenue Monsieur $name";
    echo "<br>";

?>

<!-- exercice 3 -->

<?php
    $comment = $_POST["comment"];
    echo "Votre commentaire a bien été pris en compte !";
    echo "<br>";
?>

<!-- exercice 4 -->
<?php
    $convert = $_GET["convert"];
    $centimeters = $convert * 100;
    echo "Votre valeur $convert mètre après convertion en centimètre est : $centimeters cm.";
    echo "<br>";

?>

<!-- exercice 5 -->
<?php
    $terme = $_GET["terme"];
    echo "Votre recherche est en rapport avec : $terme";
    echo "<br>";
?>

<!-- exercice 6 -->
<?php
    $random_number = rand(1, 10);
    $user_number = $_GET["devine"];
    if ($user_number != $random_number) {
        echo "$user_number n'est pas le bon chiffre";
    } else {
        echo "Bien joué fils c'est le bon chiffre";
    };
    echo "<br>";
?>