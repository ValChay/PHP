<?php
/**
 * Created by PhpStorm.
 * User: stagiaire
 * Date: 13/11/18
 * Time: 10:25
 */

function myFunction($arg){

    echo $arg;

}

/*myFunction(5);*/

const LISTNUMBER = [
    2,
    3,
    4,
    25,
    50
];

function preDump($array){
    echo "<pre>";
    var_dump($array);
    echo"</prev>";
}

/*preDump(LISTNUMBER);*/


function returnValue($array) {
    foreach ($array as $value){
        echo $value;
    }
}



function plusGrand($array, $number){

    foreach ($array as $value){
        if ($number > $value){
            return "Le nombre saisie".$number."est plus grand que".$value;
        }else{
            return "Le nombre saisie est inférieur au nombre du tableau";
        }
    }
}




function listNumber($array, $number)
{

    $listNumber = [];
    foreach ($array as $value) {
        if ($number > $value) {
            $listNumber [] = $value;
        }
        return $listNumber;
    }
}
/*echo plusGrand(LISTNUMBER, 20);*/
var_dump(listNumber(LISTNUMBER, 20));