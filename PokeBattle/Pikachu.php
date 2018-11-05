<?php
class Pikachu extends Pokemon
{
    public $energyType = 'Lightning', $hitpoints = '60', $attacks = ['Electric Ring' => 50, 'Pika Punch' => 20],
    $weakness = ['Fire' => 1.5], $resistance = ['Fighting' => 2];

    public function __construct($inputName)
    {
        parent::__construct($inputName, $this->energyType, $this->hitpoints, $this->attacks, $this->weakness, $this->resistance);
    }
}