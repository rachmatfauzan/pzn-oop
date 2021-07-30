<?php 

class Product{
    protected string $name;
    protected int $price;

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getNote(){
        return "Item : {$this->name}, (Rp.{$this->price})" . PHP_EOL;
    }
}

class ProductDummy extends Product{

    public function info(){
        echo "Nama Item: $this->name, Harga Item: RP. $this->price ";
    }

}


?>