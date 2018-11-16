<?php
session_start();

?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>

<form method="post" action="bdd.php">
    <label for="pseudo">Pseudo</label>
    <input type="text" name="pseudo" id="pseudo"><br><br>

    <label for="password">Password</label>
    <input type="password" name="password" id="password"><br><br>

    <label for="confirmePassword">Confirmer Password</label>
    <input type="password" name="confirmePassword" id="confirmePassword"><br><br>

    <input type="submit" value="Valider" id="Enregistrer">
</form>


<?php
if(isset($_GET['msg']) AND $_GET['msg'] === 'notok') {?>

    <div class="image">
        <img src="img/Kim-Jong-un-1.jpg" id="img">
        <p> Tes 2 champs mot de passe ne sont pas identique mon ami </p>
    </div>


    <?php
}
?>

    </body>
    </html>


