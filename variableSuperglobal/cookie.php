<?php
    /*
    Stocker les données dans php, 4 possibilités :
    -Stocker dans une base de données
    -Stocker dans un fichier sur votre serveur 
    -Stocker sur les cookies 
    -Stocker sur les sessions 


    Les cookies permettent d'enregistrer des deonnées pendant X temps 
    X = à vous de choisir la durée pendant laquelle vous souhaitez stocker les données 
    -- les cookies sont stockés sur la machine de l'utilisateur 
    Ils ne sont PAS stockés sur le serveur web 
    Ils bne sont PAS stockés sur votre site 



    Les cookies sont UNIQUEMENT déposés sur la machine de l'utilisateur
    Les cookies sont accessibles UNIQUEMENT par le site web qui les a déposé 

    Ce qui signifie qui si un autre site essaie d'accéder aux cookies déposés sur votre machine, 
    votre macjone va lui dire simplement d'aller se faire cuire un oeuf 

    -Le site A dépose in cookie 
    -Le site B essaie de lire le cookie du site A

    Le navigateur va lui dire fuck, tu n'es pas mon propiétaire


    Définir un cookie : 
    - utiliser la fonction setcookie
    -donner le premier paramètre (clé)
    -donner le second paramètre (valeur)
    -optionnel : donner un troisième paramètre (la durée de vie du cookie)
    */
//              clé       valeur     expire dans 1h/3600s
    setcookie("prenom", "Calvin", time() + 3600);
    setcookie("nom", "Slatouche", time() + 3600 * 24 * 30);// 1H/3600s x 24Heures x 30jours

    echo $_COOKIE["prenom"]. " " . $_COOKIE["nom"];

    // Si le cookie est  vide , on le crée 

    if(empty($_COOKIE["prenom"])){ // si le cookie est vide on le crée 
        setcookie("prenom", "Calvin", time() + 3600);
    }
?>
