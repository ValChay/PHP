<?php
session_start();


try
{
    $bdd = new PDO('mysql:host=localhost;dbname=formulaire;charset=utf8', 'root', 'root');

}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}


$req = $bdd->prepare('INSERT INTO utilisateur(name_user, contenu) VALUES(:name_user, :contenu)');
$req->execute(array(
    'name_user' => $_POST['name'],
    'contenu' => $_POST['user_message'],
));



header('Location: formulaire.php');

?>