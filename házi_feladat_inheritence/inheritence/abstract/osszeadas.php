<?php

require_once('./Muvelet.php');

class Osszeadas extends Muvelet {
    
    public function __construct( int $a, int $b) {
        parent::__construct('+', $a, $b);
    }

    
    
    public function muvelet() {
        return $this->getA() + $this->getB();
    }
}

$osszaed = new Osszeadas(6,4);

print($osszaed);

