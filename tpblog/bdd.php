<?php
session_start();




//Ajout dun utilisateur


if(isset($_POST["password"]) && isset($_POST["confirmePassword"])){


    if ($_POST["password"] === $_POST["confirmePassword"]) {

        $pass_hache = password_hash($_POST['password'], PASSWORD_DEFAULT);

        try {
            $bdd = new PDO('mysql:host=localhost;dbname=formulaire;charset=utf8', 'root', 'root');

        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $req = $bdd->prepare('INSERT INTO utilisateur(pseudo, password) VALUES(:pseudo, :password)');
        $req->execute(array(
            'pseudo' => $_POST['pseudo'],
            'password' => $pass_hache,
        ));
        echo"hello";
        header('Location: formulaire.php?msg=ok');

    }else {

         header('Location: inscription.php?msg=notok');
    }
}


// SUPPRESSION

if (isset($_GET['id']) && $_GET['msg'] === 'sup'){

    echo"heelo";
    $art_suppr=$bdd->exec('DELETE FROM article WHERE id = ' . $_GET['id']);
    header("Location: formulaire.php?delete=ok");
}



//  UPDATE

if (isset($_GET['id']) && $_GET['msg'] === 'edit'){

    $art_suppr=$bdd->prepare('UPDATE article SET auteur = , titre = , cotnenu =   WHERE id = ' . $_GET['id']);
    header("Location: formulaire.php?delete=ok");
}


if (isset($_POST['modifier'])){

    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=formulaire;charset=utf8', 'root', 'root');

    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }


    $req = $bdd->prepare('UPDATE INTO article(auteur, titre, contenu) VALUES(:auteur, :titre, :contenu)');
    $req->execute(array(
        'auteur' => $_POST['auteur'],
        'titre' => $_POST['titre'],
        'contenu' => $_POST['contenu'],

    ));



    header('Location: formulaire.php?msgAjout=ok');

}


///////// INSERTION article;

if (isset($_POST['creer'])){
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=formulaire;charset=utf8', 'root', 'root');

    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }


    $req = $bdd->prepare('INSERT INTO article(auteur, titre, contenu) VALUES(:auteur, :titre, :contenu)');
    $req->execute(array(
        'auteur' => $_POST['auteur'],
        'titre' => $_POST['titre'],
        'contenu' => $_POST['contenu'],

    ));



    header('Location: formulaire.php?msgAjout=ok');

}

?>