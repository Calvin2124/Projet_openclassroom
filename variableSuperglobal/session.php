<?php
// session_start();

/*
    Les variables de session :
    -stocker les données sur le serveur web de manière temporaire.
    -s'efface automatiquement a la fermeture du navigateur.
    -Les sessions persistent entre les dofférentes pages de votre site.
    -Un autre site ne peut PAS y avoir accès .



    Pour utiliser les sessions vous devez dire à votre interpreteur PHP que vous allez utiliser les sessions.
    Pour utiliser les sessions vous devez absolument déclarer une fois par page sessions_start().
    Cette fonction permet de dire a votre programme que vous allez utiliser les sessions.
    ATTENTION : La céclaration du déébut des sessions doit se faire AVANT TOUT CODE HTML.
    Habituellement, on le fait tout en faut de la page, pour éviter les problèmes.

    La déclaration des bariables de sessions et leur utilisation se fait comme un tableau associatif classique.

*/
$_SESSION["age"] = 22;
echo "Ton âge est : ".$_SESSION["age"];
?>