<?php
    //Tentative de connexions à la base de données 
    try {
        $utilisateur = "NOM UTILISATEUR";
        $mot_de_passe = "MOT DE PASSE";
        $base_de_donnees = "BASE DE DONNÉES";
        // PDO est la classe qui permet de se connecter à la base de données 
        $db = new PDO(
            "mysql:host=localhost;dbname=".$base_de_donnees.";charset=utf8",
            $utilisateur,
            $mot_de_passe,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION // Activer la gestion des erreurs 
            ]
        );
    } catch(Exception $e){
        echo "Connexion à la base donnée refusé.";
        exit();
    }
?>