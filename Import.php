<?php 

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\one\Conflict;
use Helper\Help;

// Memanggil class conflict
$conflict = new Conflict();
echo $conflict->call("Arif");

$conflict2 = new Data\Two\Conflict();
echo $conflict2->call();

// memanggil function helpMe()
echo Help::helpMe();


echo Help::VERSI . PHP_EOL;







?>