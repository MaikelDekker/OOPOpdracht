<?php
class Charmeleon extends Pokemon
{
    public $energyType = 'Fire', $hitpoints = '60', $attacks = ['Head Butt' => 10, 'Flare' => 30],
    $weakness = ['Water' => 2], $resistance = ['Lightning' => 10];

    public function __construct($inputName)
    {
        parent::__construct($inputName, $this->energyType, $this->hitpoints, $this->attacks, $this->weakness, $this->resistance);
    }
}