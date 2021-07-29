<?php 

class Person{
    const AUTHOR = "RF_DEVELOPER";

    var string $name = "Rio";
    var string $age;
    var ?string $address = null;

    function greeting(?string $name){
        if(is_null($name)){
            echo "Hallo, Admin {$this->name}" . PHP_EOL;
        }else{
            echo "Hallo $name, Admin {$this->name} disini" . PHP_EOL;
        }
    }

    // self keyword
    function info(){
        echo "Author : " . self::AUTHOR . PHP_EOL;
    }
}

class Constract{

    var string $nama;
    var string $alamat;

    function __construct(string $name,?string $address)
    {
        $this->nama = $name ;
        $this->alamat = $address;
    }
}

?>