<?php

require('laser.php');
require('repulsor.php');
require('fligth.php');    
require('shield.php');

class IronmanArmon {
    public $attack;
    public $defense;

    public function __construct(Attack $attack, Defense $defense)
    {
        $this->attack = $attack;
        $this->defense = $defense;
    }

    public function IronmanAttack() {
        $this->attack->attack();
    }

    public function IronmanDefense() {
        $this->defense->defend();
    }
}

$ironman = new IronmanArmon(new Laser(), new EnergyShield());

var_dump($ironman);

$ironman->IronmanAttack();
$ironman->IronmanDefense();
