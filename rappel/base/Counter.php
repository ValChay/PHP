<?php


class Counter
{
    /*Modificateur de contrôle d'accès private
    nous garanti que seul l'instance elle même peut accédeer à l'attribut

    C'est par la méthode publique getTotal qu'on exporte la valeur à l'exterieur

    Ainsi, on a une donnée qui est accessible en lecture seule depuis l'exterieur*/
    private $step;
    public $nbre = 0;
    public const UNIT = "bannane";

    // argument step pour savoir comment va counté notre counter (1 en 1 ou 2 en 2)
    public function __construct($step = 1)
    {
/* appelé automatiquement lors de l'instanciation ( opérateur new) */

        //$this est l'attribut
        $this->step = $step;

    }

    public function count()
    {

        $this->nbre += $this->step;
    }

    public function total()
    {
      return $this->nbre.''.self::UNIT;

       /* while ($this->nbre < 10) {
            $this->count();
            return $this->nbre."\n";
        }
        return $this->nbre."\n";*/
    }

    public function getPair($arg)
    {
        if ($arg % 2 === 0) {
            echo $arg;
        }

    }

    public function restart($nbre)
    {

    }
}

header('Content-type: text/plain');
$count = new Counter();

/*while ($count->nbre < 3){
    $count->count();
    echo $count->total()."\n";
}*/


