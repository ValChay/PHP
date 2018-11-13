<?php
 function returnArray($array){
     foreach ($array as $value) {
         echo "<p>".$value."</p>";
     }
 }

function preDump($array){
    echo "<pre>";
    var_dump($array);
    echo"</prev>";
}

?>