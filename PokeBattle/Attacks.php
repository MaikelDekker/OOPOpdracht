<?php
class Attacks
{
    public $attack;
    public $dmg;

    public function __construct($attack, $dmg)
    {
        $this->attack = $attack;
        $this->dmg = $dmg;
    }
}