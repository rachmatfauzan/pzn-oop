<?php 
include_once "data/Person.php";

$person = new Person();
$person->name = "Tesha";
$person->address = "Batam";
$person->age = "21 th";

var_dump($person);


echo "Nama : $person->name" . PHP_EOL;
echo "Alamat : $person->address" . PHP_EOL;
echo "Umur : $person->age" . PHP_EOL;


// Person 2 -> Perocbaan null hanya bisa di versi >= 7.4  

$person = new Person();
$person->name = "Putri";
$person->address = null;
$person->age = "21 th";

var_dump($person);

echo "Nama : $person->name" . PHP_EOL;
echo "Alamat : $person->address" . PHP_EOL;
echo "Umur : $person->age" . PHP_EOL;


?>