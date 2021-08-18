<?php 

namespace Data;

abstract class Animal{
    protected string $name;
    
    abstract function run();
}

class Cat extends Animal{

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function run(){
        echo "Ini $this->name dia kucing" . PHP_EOL;
    }
}
class Dog extends Animal{

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function run(){
        echo "Ini $this->name dia anjing";
    }
}