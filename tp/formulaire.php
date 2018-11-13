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
<form method="post" action="">
    <label for="user">User: </label><br>
    <select name="user" id="user">
        <option value= # id= "#">
        </option>
        <option value= "Val" id= "Val">Val</option>
        <option value="Bob" id="Bob"> Bob</option>
    </select><br><br>
    <input type="submit" value="Valider">
</form>


<?php

returnArray(ARTICLES, $_POST["user"]);



?>
</body>
</html>
