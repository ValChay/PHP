<?php
include "../tpmysql/fonction.php";

function random ($array){

    $rand_keys = array_rand($array);
    echo $array[$rand_keys[0]] . "\n";
    echo $array[$rand_keys[1]] . "\n";

}


$listNum = [1,2,3,4,5];
$listStr = ["Val", "Bob", "Toto", "Titi"];
$arrayResult = [array_merge($listNum, $listStr)];




$listName =["Val","Bob","Toto","Titi"];




random($listName);


