<?php 

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\Conflict as Conflict1;
use Data\Two\Conflict as Conflict2;
use Helper\Help;

// Memanggil class conflict
$conflict = new Conflict1();
echo $conflict->call("Arif");


$conflict2 = new Conflict2();
echo $conflict2->call();

// memanggil function helpMe()
echo Help::helpMe();


echo Help::VERSI . PHP_EOL;







?>