<?php

require('laser.php');
require('repulsor.php');
require('fligth.php');    
require('shield.php');

class IronmanArmon {
    public $attack;
    public $defense;
    public static $counter = 0 ;

    public function __construct(Attack $attack, Defense $defense)
    {
        $this->attack = $attack;
        $this->defense = $defense;
        self::$counter++;
    }

    public function IronmanAttack() {
        $this->attack->attack();
    }

    public function IronmanDefense() {
        $this->defense->defend();
    }
}

$ironman = new IronmanArmon(new Laser(), new EnergyShield());

// var_dump($ironman);

$ironman->IronmanAttack();
$ironman->IronmanDefense();
echo IronmanArmon::$counter . "\n";


$ironman2 = new IronmanArmon(new Repulsor(), new Flight());
echo IronmanArmon::$counter . "\n";
