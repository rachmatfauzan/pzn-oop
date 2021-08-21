<?php 

require_once "data/Car.php";
use Data\Avanza;
use Data\HasBrand;

$car = new Avanza ();

echo $car->drive();
echo $car->getTire();
echo $car->getBrand();



