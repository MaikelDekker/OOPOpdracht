<?php
class Weakness
{
    public $weakness;
    public $amount;
    public function __construct($weakness, $amount)
    {
        $this->weakness = $weakness;
        $this->amount = $amount;
    }
}