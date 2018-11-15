<?php
include "fonction.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script type='text/javascript' src='//code.jquery.com/jquery-1.9.1.js'></script>
</head>
<body>
    <div>
        <?php
        if(isset($_GET["upload"]) &&  $_GET["upload"] === "ok") {?>
            <p> Upload</p>
        <?php  } elseif (isset($_GET['upload']) && $_GET["upload"] === "notok"){?>
            <p> Buuuug</p>
        <?php  } ?>
    </div>



<form enctype="multipart/form-data" method="post" action="file.php">
    <label for="image">Inserer votre fichier</label>
    <input type="file" name="image" id="file">
    <input type="submit" value="Envoyer">
    <img src="#" id="img" >
</form>


    <div>
        <?php/*

        foreach (displayImg() as $img){

        ?>
            <img src="img/<?= $img ?>" alt="<?= $img ?>">

                <?php

            }
*/
        ?>

    </div>
</body>
</html>
