
<?php
session_start();
?>


        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Title</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <link rel="stylesheet" href="style.css" />
        </head>
        <body>

        <?php

        if (isset($_SESSION['pseudo']))
        {

        ?>
        <div class="formArt">
            <h3> Ajouter un article</h3>
            <form method="post" action="bdd.php">

                <div class="input">
                    <label for="auteur">Auteur</label>
                    <input type="text" name="auteur" id="auteur">
                </div>
                <div class="input">
                    <label for="titre">Titre :</label>
                    <input type="text" name="titre" >
                </div>
                <div class="input">
                    <label for="contenu">Contenu :</label>
                    <textarea name="contenu" id="contenu"></textarea>
                </div>

                <input type="submit" value="Valider" name="creer" id="creer">

            </form>
        </div>
        <?php
    }

    ?>