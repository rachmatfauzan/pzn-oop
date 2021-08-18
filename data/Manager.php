<?php 

namespace pzn;
class Manager{

    /*
        cara menggunakan Class:$properties -> Harus menggunakan static visibility
    */
    public string $name;
    public string $title;

    function __construct($name = "Guest", $title = "Manager")
    {
        $this->name = $name;
        $this->title = $title;

    }

    function sayHello($clnPegawai):void //void digunakan jika method tidak mempunyai nilai kembalian
    {
        echo "Hallo $clnPegawai, Pernkenalkan saya {$this->title}, {$this->name}" . PHP_EOL;
    }
}

class VicePresident extends Manager{
    

    // Overide constructor
    public function __construct($name = "Guest")
    {
        parent::__construct($name);
    }

    function sayHello($clnPegawai):void //void digunakan jika method tidak mempunyai nilai kembalian
    {
        echo "Hallo $clnPegawai, Pernkenalkan saya {$this->title}, {$this->name}" . PHP_EOL;
    }
}


?>