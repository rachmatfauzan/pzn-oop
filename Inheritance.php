<?php 

require_once "data/Manager.php";



$NameOfManger = new Manager("Rachmat Fauzan");
$NameOfManger->sayHello("Dayat");

// Menggunakan class child VicePresident 
$NameOfManger = new VicePresident("ALi Burki");
echo $NameOfManger->masokPak("Eko");

?>