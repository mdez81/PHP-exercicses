<?php
require_once('./Muvelet.php');

/**
 * Description of Szorzas
 *
 * @author feher
 */
class Szorzas extends Muvelet
{
    public function __construct(int $a, int $b)
    {
        parent::__construct("*", $a, $b);
    }
    
    public function muvelet()
    {
        return $this->getA() * $this->getB();
    }
}

$szorzas = new Szorzas(5,4);
print($szorzas);