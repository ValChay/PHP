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
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbaaar">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li>
                    <a href="inscription.php" class="nav-link" >S'inscrire</a>
                </li>
                <li class="button">
                    <?php
                    if(isset($_SESSION['pseudo'])) {

                    ?>
                    <form method="post" action="">
                        <button value="disco" name="disco" class="nav-link">Deconnexion</button>
                    </form>
                </li>
                <?php
                if (isset($_POST['disco'])){

                    session_destroy();
                    header('Location: formulaire.php');
                }
                }else {

                    ?>
                    <li>
                        <a href="login.php" class="nav-link">Login</a>
                    </li>
                    <li>

                        <?php

                        }

                        ?>
                    </li>
                <li class="nav-item">
                    <?php

                    if (isset($_SESSION['pseudo'])) {

                        ?>
                        <a class="nav-link" href="ajout.php">Ajouter un article</a>
                        <?php
                    }
                    ?>
                </li>
            </ul>
        </div>
    </nav>
    <?php

/* ************* REnvoi un message si la requete est bien passé  ************* */

    if(isset($_GET['msg']) AND $_GET['msg'] ==='ok'){

        echo "Vous êtes bien enregistré"."<br>";
    }

    if(isset($_GET['msgAjout']) AND $_GET['msgAjout'] ==='ok'){

        echo "Article bien enregistré !"."<br>";
    }


    ?>
</header>

<main>

    <?php

    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=formulaire;charset=utf8', 'root', 'root');

    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
    if(isset($_SESSION['pseudo'])) {

    include "fonction.php";

    ?>
    <div class="display">
        <?php

        try {
            $bdd = new PDO('mysql:host=localhost;dbname=formulaire;charset=utf8', 'root', 'root');

        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $select = $bdd->query('SELECT * FROM article ');

        while ($donnees = $select->fetch()) {
            echo '
             <div class="contenu">' . '
             <p><strong>' . ' Auteur :' . '</strong>' . htmlspecialchars($donnees['auteur']) . '</p>' .
                '<p><strong>' . ' Titre :' . '</strong>' . htmlspecialchars($donnees['titre']) . '</p>' .
                '<p><strong>' . ' Contenu :' . '</strong>' . htmlspecialchars($donnees['contenu']) . '</p>' .
                '<p><strong>' . ' Date :' . '</strong>' . htmlspecialchars($donnees['date']) . '</p>';
            var_dump($donnees['id']);
            ?>
               <form method="post" action="bdd.php">
               <!--<button type="modifier" name="modifier">Modifier</button>-->
               <a href="bdd.php?id=<? echo $donnees['id'] ?>&msg='sup'">Supprimer</a>
               <a href="bdd.php?id=<? echo $donnees['id'] ?>&msg='edit'">Modifier</a>

               <!--<button type="supprimer" name="supprimer">Supprimer</button>-->
               </form>
               </div>';

               <?php


        }
        $select->closeCursor();
    }
               ?>



    </div>



    <!----------Formulaire ajouter article ---------------->



</main>

</body>
</html>