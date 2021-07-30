<?php 

include_once 'data/Product.php';

$product = new Product("Macbook", "4500000");
echo $product->getNote();


$productDummy = new ProductDummy("Infinix", "1500000");
$productDummy->info();

?>