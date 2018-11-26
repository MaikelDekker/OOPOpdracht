<?php
class Pikachu extends Pokemon
{
    public function __construct($inputName)
    {
        parent::__construct($inputName, 'lightning', '60');
        $this->attacks[] = new Attacks('Pika Punch', '20');
        $this->attacks[] = new Attacks('Electric Ring', '50');
        $this->weakness[] = new Weakness('Fire', 1.5);
        $this->resistance[] = new Resistance('fighting', 20);
    }
}