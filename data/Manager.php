<?php 


class Manager{

    var string $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    function sayHello($clnPegawai):void //void digunakan jika method tidak mempunyai nilai kembalian
    {
        echo "Hallo $clnPegawai, Pernkenalkan saya Manager {$this->name}" . PHP_EOL;
    }
}

class VicePresident extends Manager{
    
    function sayHello($clnPegawai):void //void digunakan jika method tidak mempunyai nilai kembalian
    {
        echo "Hallo $clnPegawai, Pernkenalkan saya Vice President {$this->name}" . PHP_EOL;
    }
}


?>