<?php
class Superhero
{
    public $name, $gender, $team, $oneliner;

    public function __construct($name, $gender, $team, $oneliner)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->team = $team;
        $this->oneliner = $oneliner;
    }
    public function __ToString(){
        return json_encode($this);
    }
    public function sayOneLiner()
    {
        echo '<h2>'.$this->oneliner.'</h2>';
    }
}