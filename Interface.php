<?php 

require_once "data/Car.php";
use Data\Avanza;

$car = new Avanza ();

echo $car->drive();
echo $car->getTire();
echo $car->getBrand();



