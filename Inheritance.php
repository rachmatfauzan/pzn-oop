<?php 

require_once "data/Manager.php";



$NameOfManger = new Manager("Rachmat Fauzan");
$NameOfManger->sayHello("Dayat");

// Menggunakan class child VicePresident 
$NameOfVp = new VicePresident("ALi Burki");
$NameOfVp->sayHello("Burhan");

?>