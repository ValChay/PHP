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

?>

    <!----------Formulaire pour afficher contenu en fonction du user selectionné ---------------->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<form method="post" action="">

        <label for="pseudo">Pseudo</label>
        <input type="text" name="pseudo" value="" id="pseudo">

        <label for="password">Password</label>
        <input type="text" name="password" id="password">

        <input type="submit" value="Valider" id="Connexion">
    </form>

<?php

    if (isset($_POST['pseudo']) && isset($_POST['password'])){

        $pseudo = $_POST['pseudo'];

        //  Récupération de l'utilisateur et de son pass hashé
        $req = $bdd->prepare('SELECT id, password FROM utilisateur WHERE pseudo = :pseudo');
        $req->execute(array(
            'pseudo' => $pseudo));
        $resultat = $req->fetch();
        // Comparaison du pass envoyé via le formulaire avec la base
        $isPasswordCorrect = password_verify($_POST['password'], $resultat['password']);

            if (!$resultat)
            {
                echo 'Mauvais identifiant ou mot de passe !'.
                    '<div class="image">
                         <img src="img/Kim-Jong-un-1.jpg" id="img">
                        
                    </div>';

                ;
            }
            else
            {
                if ($isPasswordCorrect) {
                    session_start();
                    $_SESSION['id'] = $resultat['id'];
                    $_SESSION['pseudo'] = $pseudo;
                    echo 'Vous êtes connecté !';
                    header('Location: formulaire.php');
                }

            }



    }
?>

<a href="formulaire.php">Accueil</a>
</body>
</html>

