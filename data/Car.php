<?php 


// INTERFACE INHERITANCE

namespace Data;

interface HasBrand{
    function getBrand();
}

interface IsMaintenance{
    function IsMaintenance();
}

interface Car extends HasBrand, IsMaintenance{  // Extends bisa di buat  polimorfisme jika PARRENTnya menggunakan "interface" juga
    
    function drive();

    function getTire();

}

class Avanza implements Car{
    
    function drive(){
        return "Drive Avanza" . PHP_EOL;
    }

    function getTire()
    {
        return 4 . PHP_EOL;
    }
    
    public function getBrand()
    {
        echo "Toyota";
    }

    public function IsMaintenance()
    {
      return false;   
    }
}
