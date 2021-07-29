<?php 

class Person{
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
}

?>