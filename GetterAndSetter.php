<?php 

require_once "data/Category.php";


$category = new Category();
$category->setname("apple");
$category->setexpensive(true);

echo "No Model : {$category->getname()}" . PHP_EOL;
echo "Expensive : {$category->isexpensive()}" . PHP_EOL;

$category->setname("    ");
echo "Name : " . $category->getname();


