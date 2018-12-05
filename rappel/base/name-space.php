<?php

namespace POE\formation\poo;

/* la classe est définie au sein de l'espace de nommage POE
son pleinement qualifié est \POE\DateTime
*/
class DateTime {

}

var_dump(new DateTime());
// accès à la classe native de PHP avec le FON (full qualified name)
var_dump(new \DateTime());
var_dump(new \POE\DateTime());