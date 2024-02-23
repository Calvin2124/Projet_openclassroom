<?php //exercice 1
    $nombres = [1, 4, 9, 30, 45];
    list($element1, $element2) = $nombres;
    echo "Les deux premières valeurs du tableau sont : $element1 et  $element2.";
    // [$nombre1, $nombre2] = $nombres;
    echo "<br>";

    //exercice 2
    $personne = [
        "nom" => "Rousseau",
        "prenom" => "Calvin",
        "age" => 22
    ];
    ["nom" => $nom, "prenom" => $prenom, "age" => $age] = $personne;
    echo "Nom : $nom, Prénom : $prenom, Age : $age";
    echo "<br>";


    //exercice 3
    $prix = [
        "stylo" => 0.37,
        "bouteille" => 0.17,
        "telephone" => 999.99
    ];

    ["telephone" => $prix_telephone] = $prix;
    $prix_euro = $prix_telephone;
    $prix_telephone *=  1.18;
    $resultat_arrondi = round($prix_telephone, 2);
    echo "Le prix du téléphone est : $prix_euro € et le prix en dollars est : $resultat_arrondi $.";
    echo "<br>";

    // exercice 4
    $commande = [
        "Patates" => 3,
        "Carottes" => 0.550,
        "Oignons" => 1.9
    ];
    $test = "Carottes";
    ["Carottes" => $carotte] = $commande;
    echo "Dans le tableau les $test pèsent $carotte Kg.";
    echo "<br>";
    //exercice 5
    $couleurs = [
        "Rouges" => "rouge",
        "Vert" => "vert",
        "Violet" => "violet"
    ];
    ["Rouges" => $rouge, "Vert" => $vert] = $couleurs;
    echo "La première couleur est : $rouge et la deuxième est : $vert."
?>

