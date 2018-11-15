<?php
/**
 * Created by PhpStorm.
 * User: stagiaire
 * Date: 15/11/18
 * Time: 09:46
 */
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
    if($_GET["upload"] === "ok"){?>
    <p> Upload</p>
    <?php  }

    ?>
</div>
<form enctype="multipart/form-data" method="post" action="file.php">
    <label for="image">Inserer votre fichier</label>
    <input type="file" name="image">
    <input type="submit" value="Envoyer">
</form>
</body>
</html>
