<?php 

require_once 'data/Conflict.php';
require_once 'data/Helper.php';

use Data\One\{Conflict, Dummy, Sample};

$conflict = new Conflict();
$dummy= new Dummy();

// Memanggil class didalam function 

function createNew(){
    global $conflict;
    return $conflict->call("Ajis");
}



echo createNew();

?>