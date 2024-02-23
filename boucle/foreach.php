<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ul>
<?php
    $list = array("Violette", "Pomme", "Julia", "Jean");
    foreach($list as $name){
        $result = "<li>$name</li>";
        echo($result);
    }
?>
</ul>
<ul>
    <?php foreach ($list as $name) {?>
            <li><?=$name?></li>
    <?php
        }
    ?>
</ul>
<!-- EXERCICE 2 -->
<?php
    $note_classe = array(
        "Violette" => 15,
        "Pomme" => 6,
        "Julia" => 19,
        "Jean" => 11
    );
    foreach ($note_classe as $valeur) {
        $result += $valeur;
    }
    echo($result / count($note_classe));
    echo("<br>");

?>

<!-- Exercice 3 -->
<?php
    // $images = array(
    //     "image1" => "chat.meme.png",
    //     "image2" => "chat.meme.png",
    //     "image3" => "chat.meme.png"
    // );

    $images = [
        [
            'img_Url' => 'chat.meme.png',
            'alt_Img' => 'Dodomu',
        ],
        [
            'img_Url' => 'chat.meme.png',
            'alt_Img' => 'Zebi',
        ],
        [
            'img_Url' => 'chat.meme.png',
            'alt_Img' => 'Ryan est gay',
        ],
    ];
?>
<?php foreach ($images as $img) {?>
            <img src="<?=$img['img_Url']?>" alt="<?=$img["alt_Img"]?>">
    <?php
        }
    echo("<br>");
    ?>

<?php
    $livre = array(
        array("titre" => "title livre 1", "auteur" => "Ryan ha", "année" => 2010),
        array("titre" => "title livre 2", "auteur" => "Ryanus", "année" => 2011),
        array("titre" => "title livre 3", "auteur" => "Ryanaze", "année" => 2012),
    );
?>
<ul>
    <?php
        foreach ($livre as $test) {
    ?>
    <li><?= $test['titre'], " ", $test['auteur'], " ", $test['année']?></li>
    <?php
        }
    ?>
</ul>

<?php
    $etudiant = array(
        array("nom" => "Cule", "prenom" => "Jean", "age" => 8),
        array("nom" => "Tamaire", "prenom" => "Nick", "age" => 12),
        array("nom" => "Domie", "prenom" => "Marceau", "age" => 20),
    );
?>

<h2>Tableau étudiants</h2>

    <table>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Age</th>
        </tr>
        <?php
            foreach ($etudiant as $info) {
        ?>
            <tr>
                <td><?= $info["nom"]?></td>
                <td><?= $info["prenom"]?></td>
                <td><?= $info["age"]?></td>
            </tr>
        <?php
            }
        ?>
    </table>    

<nav>
    <ul>
        <?php
            $nav_bar = array(
                array("lien" => "https://www.youtube.   com/", "titre" => "Youtube"),
                array("lien" => "https://www.google.    com/", "titre" => "Google"),
                array("lien" => "https://codebattle.skillfacile.com/", "titre" => "Code Battle")
            );

            foreach ($nav_bar as $nav) {?>
                <a href="<?=nav["lien"]?>"><li><?= $nav['titre']?></li></a>
        <?php
            }
        ?>
    </ul>
</nav>
</body>
</html>
