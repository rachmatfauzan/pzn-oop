<?php 

require_once "data/Programmer.php";


$programmer = new Company();
$programmer->developer = new Programmer("Ajix");
var_dump($programmer);

$programmer->developer = new BackendProgrammer("ichal");
var_dump($programmer);

$programmer->developer = new FrontendProgrammer("ichal");
var_dump($programmer);



sayHelloProgramer(new Programmer("ajiks"));
sayHelloProgramer(new BackendProgrammer("Ajiks"));
sayHelloProgramer(new FrontendProgrammer("jurik"));

?>