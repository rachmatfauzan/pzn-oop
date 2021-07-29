<?php 


require_once "data/Person.php";

define("APP", "Aplikasi PZN");
const APP_VERSION = "0.0.1";

echo APP . PHP_EOL;
echo APP_VERSION . PHP_EOL;

echo "AUTHOR:" . Person::AUTHOR . PHP_EOL;

$info = new Person();

$info->info();
?>