<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=formulaire;charset=utf8', 'root', 'root');

}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
if(isset($_POST["user"])){
    $req = $bdd->prepare('INSERT INTO utilisateur (name_user) VALUES(?)');
    $req->execute(array($_POST['name']));
}

header('Location: formulaire.php');

?>