<?php
session_start();

/*$_SESSION["numbers"] = 42;*/


function addUser($nom, $prenom, $boolean){

    if (!empty($nom) && !empty($prenom)){

        var_dump($nom);
        $_SESSION['nom'] = $nom;
        $_SESSION['prenom'] = $prenom;
        $_SESSION['admin'] = $boolean;

        header('Location: session.php?user=ok');
    }else{

        header('Location: session.php?user=notok');

    }

}

addUser($_POST['nom'], $_POST['prenom'], $_POST['admin']);
var_dump($_SESSION);