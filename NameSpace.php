<?php 

require_once 'data/Conflict.php';
require_once 'data/Helper.php';

$data1 = new Data\One\conflict();
echo $data1->call();

$data2 = new Data\Two\conflict();
echo $data2->call();


// AKses function Help menggunakan variabel 

$help = new Helper\Help();
echo $help->helpMe();


echo Helper\Help::helpMe(); 
echo Helper\Help::VERSI;


?>