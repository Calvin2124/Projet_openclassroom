<h1>Exercice 1</h1>
<form action="exercice6.php" method="post">
    <label for="number1">Nombre 1</label>
    <input type="text" name="number1" >
    <label for="number2">Nombre 2</label>
    <input type="text" name="number2" >
    <label for="choix">Choisissez une option :</label>
    <select name="choix" id="choix">
        <option value="option1">Addition</option>
        <option value="option2">Soustraction</option>
        <option value="option3">Multiplication</option>
        <option value="option4">Division</option>
    </select>
    <input type="submit" value="Envoyer">
</form>


<h1>exercice 2</h1>
<form action="exercice6.php" method="post">
    <label for="name">Votre Nom</label>
    <input type="text" name="name" >
    <label for="mail">Votre Email</label>
    <input type="text" name="mail" >
    <label for="password">Votre mot de passe</label>
    <input type="password" name="password">
    <input type="submit" value="Envoyer">
</form>

<h1>Exercice 3</h1>
<form action="exercice6.php" method="post">
    <label for="comment">Commentaire</label>
    <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
    <input type="submit" value="Envoyer">
</form>

<h1>Exercice 4</h1>
<form action="exercice6.php" method="get">
    <label for="text">Donnez un nombre a convertir</label>
    <input type="text" name="convert">
    <input type="submit" value="Envoyez">
</form>

<h1>Exercice 5</h1>
<form action="exercice6.php" method="get">
    <label for="terme">Rechercher</label>
    <input type="text" name="terme">
    <input type="submit" value="Envoyez">
</form>

<h1>Exercice 6</h1>
<form action="exercice6.php" method="get">
    <label for="text">Devinez le chiffre</label>
    <input type="text" name="devine">
    <input type="submit" value="Envoyez">
</form>