<?php
class Pokemon
{
    public $name, $energyType, $hitpoints, $health, $attacks, $weakness, $resistance;

    public function __construct($name, $energyType, $hitpoints)
    {
        $this->name = $name;
        $this->energyType = $energyType;
        $this->hitpoints = $hitpoints;
        $this->health = $hitpoints;
    }
    public function Attack($enemy, $attack)
    {
        for($i=0;$i<sizeof($this->attacks);$i++)
		{
			if($this->attacks[$i]->attack == $attack)
			{
                $enemy->Defend($this->energyType, $this->attacks[$i]->dmg);
			}
		}
    }
    public function Defend($energyType, $dmg)
    {
        $totalDamage = $dmg;
        for($i=0;$i<sizeof($this->resistance);$i++)
		{
			if($this->resistance[$i]->resistance == $energyType)
			{
                $totalDamage = $dmg - $this->resistance[$i]->amount;
			}
        }
        for($i=0;$i<sizeof($this->weakness);$i++)
		{
			if($this->weakness[$i]->weakness == $energyType)
			{
                $totalDamage = $dmg * $this->weakness[$i]->amount;
			}
        }
        $this->health = $this->health - $totalDamage;
    }
    public function __ToString(){
        return json_encode($this);
    }
}