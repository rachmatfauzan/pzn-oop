<?php 

require_once "data/SayGoodBye.php";
use Data\Traits\{Person};


$person = new Person();
$person->goodBye("Bayu");
$person->hello("Agam");

$person->name="Kirana";
var_dump($person);

// abstract trait
$person->run();
