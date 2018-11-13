<?php
include "data.php";
include "fonction.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post" action="bdd.php">
    <label for="user">User: </label><br>
    <select name="user" id="user">
        <option value= # id= "#">
        </option>
        <option value= "Val" id= "Val">Val</option>
        <option value="Bob" id="Bob"> Bob</option>
    </select><br><br>
    <input type="text" name="name">
    <input type="submit" value="Valider">
</form>


<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=formulaire;charset=utf8', 'root', 'root');

}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

/*returnArray(ARTICLES, $_POST["user"]);*/

$reponse = $bdd->query('SELECT name_user FROM utilisateur');


// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($donnees = $reponse->fetch())
{
    echo '<p><strong>' . htmlspecialchars($donnees['name_user']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
}

$reponse->closeCursor();
?>
</body>
</html>
