<?php 

require "data/Manager.php";

use pzn\{Manager,VicePresident};

$manager = new Manager("andik", "Manager");
echo $manager->sayHello("RIgen");


$vp = new VicePresident("VicePresident"); //Argumen = Jabatan/ title
$vp->sayHello("jalal")


?>