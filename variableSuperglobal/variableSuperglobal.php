<!-- $_POST : Contient les données envoyées via la méthode POST
On peu tvoir les données envoyés en insectant les requêtes envoyées depuis votre navigateur sur l'onglet "network" ou "reseau" en français-->

<?php
    if(!empty($_GET["ville"])){// empty veut dire vide la dans cette exemple si le get n'est pas vide et donc il faut afficher la ville 
        echo "La ville est : " . $_GET["ville"] . "<br/>";
    }

    // On vérifie si le mot de passe a été envoyé 
    if(!empty($_POST["password"])){
        echo "Le mot de passe et le nom d'utilisateur ont été envoyés <br/> ";
    }
?>
<a href="variableSuperglobal.php?id=12&age=22&ville=Brignoles">Passer les données</a>
<form action="#" method="POST">
    <input type="text" name="username" placeholder="Nom d'utilisateur">
    <input type="password" name="passsword" placeholder="Mot de passe">
    <input type="submit" value="Envoyer les données">
</form>
<?php
/*
$_FILES : contient les informations sur les fichiers qui vous uploadez via un formulaire et la méthode POST
Pour l'upload on doit ajouter un nouvel attribut sur les formulaires, 
enctype="multipart/form-data"
Accessible par : $_FILES["nomDuFichier"]

$_SERVER : contient des données sur l'environnement de développement.


$_REQUEST : contient les données combinés de $_GET/$_POST et $_COOKIE
On ne doit pas s'ne servir, il vaut mieux utiliser $_GET, $_POST et $_COOKIE.
*/

var_dump($_SERVER);

/*
LES CONSTANTES :
Ce sont des données stockés qui ne changent pas 

Pour définir une constante 2 possibilités : 
-Define("NOMDELACONSTANTE", "Valeur de la constante")
- const MACONSTANTE = "Ma valeur"

Par convention on écrit les constantes en MAJUSCULE 
Les constantes n'ont pas de signe $ devant leur nom 

Pour utiliser une constante, il suffit de l'appeler directement par son nom :
NOMDELACONSTANTE
MACONSTANTE
*/

define("PI", 3.14489087898764567);
echo "<br/> La valeur de PI est : ".PI;

const UNE_AUTRE_VARIABLE = "Mon autre variable";
echo "<br/> La valeur  de la constante : ".UNE_AUTRE_CONSTANTE;


/*
PHP possède des constantes qui sont déjà prédéfinies
PHP_VERSION => Connaître la version de PHP
DIRECTORY_SEPARATOR => Le caractère du répertoire du système d'exploitation 
La portée d'une constante est globale
On peut y accéder sur tout le script 
On peut utiliser les constantes dans les fonctions 
*/
echo "<br/>La version de PHP est :". PHP_VERSION;


/*

*/


?>