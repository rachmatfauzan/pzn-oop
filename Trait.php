<?php 

require_once "data/SayGoodBye.php";
use Data\Traits\{Person};



$person = new Person();
$person->goodBye("Bayu");
$person->hello("Agam");

var_dump($person);
$person->setName("Faradina");
var_dump($person);

// abstract trait
$person->run();
