<?php // exercice for 
    // for ($i = 1; $i <= 100; $i += 2) {
    //     echo "$i";
    // }
?>

<!-- Exercice while -->

<?php //exercice 1
    // $number_random = rand(0, 10);
    // while ($i <= 10){
    //     $result = $number_random * $i;
    //     echo "$result<br>";
    //     $i++;
    // }
?>

<?php // exercice 2
    // $number_positif = rand(0, 10);
    // $sum = 0;
    // for ($i = 0; $i <= $number_positif; $i++){
    //     $sum += $i;
    //     echo "$sum ";
    // }
?>

<?php // exercice 3
    // $number_premier = rand(0, 40);
    // $test = True;
    // if ($number_premier == 1){
    //     $test = False;
    // } else {
    //     for ($i = 2; $i <= $number_premier / 2; $i++) {
    //         if ($number_premier % $i == 0) {
    //             $test = false;
    //             break;
    //         }
    //     }
    // }
    // if ($test) {
    //     echo "$number_premier est un nombre premier.";
    // } else {
    //     echo "$number_premier  n'est pas un nombre premier.";
    // }
?>

<?php // exercice 4
    // $etoile_print = rand(4, 10);
    // for ($i = 1; $i <= $etoile_print; $i += 1) {
    //     echo str_repeat("@", $i). "<br>";
    // }
    //     $user_number = 5; // Remplace 5 par le nombre que tu veux
        
    //     for ($i = 1; $i <= $user_number; $i++) {
    //         for ($j = 1; $j <= $i; $j++) {
    //             echo "#";
    //         }
    //         echo "<br>";
    //     }
        
    //     for ($i = $user_number - 1; $i >= 1; $i--) {
    //         for ($j = 1; $j <= $i; $j++) {
    //             echo "#";
    //         }
    //         echo "<br>";
    //     }
?>

<?php #exercice 5 Calcul de puissance 
    // $user_number = $_POST["test1"];
    // $user_puissance = $_POST["test2"];
    // $i = 0;
    // $result = 1;
    // while ($i < $user_puissance){
    //     $i++;
    //     $result *= $user_number;
    // }

    // echo("Le résulat de $user_number puissance $user_puissance = $result");
    // echo "<br>";
?>

<form action="exercice1.php" method="post">
    <label for="demande">Donnez un nombre compris entre 0 et 100</label>
    <input type="text" name="user_number">
    <input type="submit" value="Envoyer">
</form>
<?php #exercice 6 jeu de devinette 
    $user_number = $_POST["user_number"];
    $random_number = 7;
    $life = 10;
    while ($life > 0) {
        if ($user_number < $random_number){
            echo("Plus grand !");
        }elseif ($user_number > $random_number){
            echo("Plus petit !");
        }else{
            echo("Bien joué !");
            break;
        }
        $life--;
    }
    if ($life == 0){
        echo("Vous avez perdu !");
    }
?>
<!-- <form action="exercice1.php" method="post">
    <label for="compte_a_rebours">Donnez un nombre</label>
    <input type="text" name="user_number">
    <input type="submit" value="Envoyer">
</form> -->
<?php #exercice 7 compte à rebours 
    // $user_number = $_POST["user_number"];
    // $compte_a_rebours = 1;
    // while ($user_number >= $compte_a_rebours){
    //     $result = $user_number - 1;
    //     echo("Compte à rebours : $result <br>");
    //     $user_number--;
    // }
?>

<?php #exercice 8 table de multiplication par 9
    // $mult = 9;
    // $i = 0;
    // while ($i <= 10){
    //     $result = $i * $mult;
    //     $i++;
    //     echo("La table de 9 est : $result <br>");
    // }
?>