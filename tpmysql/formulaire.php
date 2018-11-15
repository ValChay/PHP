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


<?php
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
<form method="post" action="">
    <label for="user">User: </label><br>
    <select name="user" id="user" >
        <?php

        $reponse = $bdd->query('SELECT * FROM utilisateur ORDER BY id DESC');

        while ($donnees = $reponse->fetch())
        {
            ?>
            <option value="<?php echo $donnees['name_user']; ?>" name="name_user"> <?php echo $donnees['name_user']; ?></option>
            <?php

        }
        ?>
    </select>
    <input type="submit" value="Afficher" name="afficher">
</form>

<?php
/* ******* Condition pour executé la fonction *********** */
if(isset($_POST['afficher'])){
$userChoice = $_POST['user'];

displaySelect($userChoice);
}

?>
 <!----------------Formulaire ajout-------------->

<form method="post" action="bdd.php">
    <label for="name">User:</label>
    <input type="text" name="name" id="name"><br><br>
    <label for="msg">Message :</label>
    <textarea id="msg" name="user_message" ></textarea>
    <input type="submit" value="Valider" id="Valider">
</form>

</body>
</html>
