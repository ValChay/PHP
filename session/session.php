<?php
session_start();
$_SESSION;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div>
    <?php
    if($_GET["user"]=="ok"){
        echo'user ok';
    }elseif($_GET["user"]=="notok"){
        echo"user notok";
    }
    var_dump($_SESSION["nom"]);
    ?>

</div>
<div>
    <?php
    if(!empty($_SESSION['nom'])) {?>
        <form method="post" action="destroy.php">
            <input type="submit" value="Detruire">
        </form>
        <?php
    }
    ?>
</div>
<form action="form.php" method="post">
    <label for="nom">Nom</label>
    <input type="text" name="nom">
    <label for="prenom">Prenom</label>
    <input type="text" name="prenom">
    <input type="checkbox" name="admin" value="admin">
    <input type="submit" value="Envoyer">
</form>

<div>
    <?php
    if(!empty($_SESSION)){ ?>
        <p><?= $_SESSION["nom"] ?></p>
        <p><?= $_SESSION["prenom"] ?></p>
        <p><?= $_SESSION["admin"] ?></p>
        <?php
    }
    ?>
</div>

</body>
</html>
