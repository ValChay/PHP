<?php

function displaySelect() {


    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=formulaire;charset=utf8', 'root', 'root');

    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }

    $select = $bdd->query('SELECT * FROM article ');

    while ($donnees = $select->fetch())
    {
        echo '
             <div class="contenu">'.'
             <p><strong>'.' Auteur :'.'</strong>'. htmlspecialchars($donnees['auteur']).'</p>'.
            '<p><strong>'.' Titre :'.'</strong>'. htmlspecialchars($donnees['titre']).'</p>'.
            '<p><strong>'.' Contenu :'.'</strong>'. htmlspecialchars($donnees['contenu']).'</p>'.
            '<p><strong>'.' Date :'.'</strong>'. htmlspecialchars($donnees['date']).'</p>';


        echo '
               <form method="post" action="bdd.php">
               <button type="modifier" name="modifier">Modifier</button>
               <button type="supprimer" name="supprimer">Supprimer</button>
               </form>
               </div>';

    }
    $select->closeCursor();

}


/*function returnArray($array,$user,$idUser)
{

    foreach ($array as $value) {
        if ($user == $value["user"]) {
            echo $value["content"];

        }
    }
}
*/
