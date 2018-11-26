<?php
class Charmeleon extends Pokemon
{
    public function __construct($inputName)
    {
        parent::__construct($inputName, 'Fire', '60');
        $this->attacks[] = new Attacks('Head Butt', '10');
        $this->attacks[] = new Attacks('Flare', '30');
        $this->weakness[] = new Weakness('Water', 2);
        $this->resistance[] = new Resistance('Lightning', 10);
    }
}