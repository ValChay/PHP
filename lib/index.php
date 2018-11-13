<?php

include "form.php";
include "data.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
    returnArray(FRUITS);
?>

<div>
    <?php
    for ($i=0; $i < 10; $i++) { ?>
    <a href="#">Lien <?= $i ?></a>
     <?php }
     ?>


</div>
</body>
</html>