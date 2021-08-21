<?php 

require_once "data/Location.php";

use Data\{City, Province, Country};

// $location = new Location(); error -> karen class abstract

$city = new City();
echo $city->name = "Awas";


$province = new Province();
$province->name = "Jabar";
var_dump( $province);

$country = new Country;



