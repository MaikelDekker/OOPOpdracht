<?php
class Pokemon
{
    public $name, $energyType, $hitpoints, $health, $attacks, $weakness, $resistance;

    public function __construct($name, $energyType, $hitpoints, $attacks, $weakness, $resistance)
    {
        $this->name = $name;
        $this->energyType = $energyType;
        $this->hitpoints = $hitpoints;
        $this->health = $hitpoints;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
    }
    public function __ToString(){
        return json_encode($this);
    }
    public function Attack($enemy, $attack)
    {
        $enemy->health = $enemy->health - $this->attacks[$attack];
    }
}