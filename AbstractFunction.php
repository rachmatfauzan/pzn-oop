<?php  

require_once "data/Animal.php";

use Data\{Cat, Dog};

$cat  = new Cat("Kucing");
$cat->run();


$dog = new Dog("Doggy");
$dog->run();
