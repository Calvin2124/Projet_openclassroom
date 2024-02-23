<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
    <input type="text" name="prix_ht" placeholder="Quelle est le prix hors taxe ?" value="<?php if (!empty($_POST["prix_ht"])){echo $_POST["prix_ht"];}?>">
    <input type="text" name="tva" placeholder="Montant de la TVA ?" value="<?php if (!empty($_POST["tva"])){echo $_POST["tva"];}?>">
    <input type="submit" value="Envoyer les données">
    </form>

    <?php
    function calcul_ttc($prix_ht, $tva){
        return $prix_ht * (1 + ($tva / 100));
    }


    $prix_ht = $_POST["prix_ht"];
    $pourcentage_tva = $_POST["tva"];
    if(!empty($_POST["prix_ht"]) && !empty($_POST["tva"])){
        echo "Le prix total est de : ". calcul_ttc($prix_ht, $pourcentage_tva);
    }
    
    ?>
</body>
</html>