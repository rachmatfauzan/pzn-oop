<?php 


class Manager{

    var string $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    function sayHello($name):void //void digunakan jika method tidak mempunyai nilai kembalian
    {
        echo "Hallo $name, Pernkenalkan saya Manager {$this->name}" . PHP_EOL;
    }
    function masokPak($name):string //void digunakan jika method tidak mempunyai nilai kembalian
    {
        return "Masok Pak $name, Pernkenalkan saya Manager {$this->name}" . PHP_EOL;
    }
}

class VicePresident extends Manager{
    
}

?>