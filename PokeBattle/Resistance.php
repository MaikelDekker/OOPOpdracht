<?php
class Resistance
{
    public $resistance;
    public $amount;
    public function __construct($resistance, $amount)
    {
        $this->resistance = $resistance;
        $this->amount = $amount;
    }
}