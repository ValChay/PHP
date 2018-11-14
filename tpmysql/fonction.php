<?php




function displaySelect($user) {


    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=formulaire;charset=utf8', 'root', 'root');

    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }

    $select = $bdd->prepare('SELECT * FROM utilisateur WHERE name_user = :name_user ');
    $select->execute(array(
        'name_user' => $user,
    ));



    while ($donnees = $select->fetch())
    {
        echo '<p><strong>' . htmlspecialchars($donnees['name_user']) .
            '</strong> : ' . htmlspecialchars($donnees['contenu']) . '</p>';
    }

    $select->closeCursor();

}


function returnArray($array,$user,$idUser)
{

    foreach ($array as $value) {
        if ($user == $value["user"]) {
            echo $value["content"];

        }
    }
}

