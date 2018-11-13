<?php
function returnArray($array,$user)
{

    foreach ($array as $value) {
        if ($user == $value["user"]) {
            echo $value["content"];

        }
    }
}