<?php 

include_once "data/Person.php";
$person = new Person();
echo $person->greeting("Tessha");

$person2 = new Person();
$person2->name = "Adi";
echo $person2->greeting("Pragus");

// is_null
$person = new Person();
echo $person->greeting(null);







?>