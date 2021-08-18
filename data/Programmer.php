<?php 

/*
    Polimorphism adalah sebuah object yang dapat berubah betuk menjadi bentuk lain
*/

class Programmer{
    
    public string $developer;

    public function __construct(string $name)
    {
        $this->developer = $name;
    }

}

class BackendProgrammer extends Programmer{};


class FrontendProgrammer extends Programmer{};

class Company{
    
    public Programmer $developer; // Programmer = merupakan tipe data bentukan

}

function sayHelloProgramer(Programmer $programmer){
    
    // instanceof = untuk type and check data yang bentuknya Objek
    if ($programmer instanceof BackendProgrammer){
        echo "Hello Backend Programmer $programmer->developer" . PHP_EOL;
    } else if($programmer instanceof FrontendProgrammer){
        echo "Hello Frontend Programmer $programmer->developer" . PHP_EOL;
    } else if ($programmer instanceof Programmer) {
        echo "Hello Programmer $programmer->developer" . PHP_EOL;
    }

}



?>