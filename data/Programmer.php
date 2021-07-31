<?php 


class Programmer{
    
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

}

class BackendProgrammer extends Programmer{};


class FrontendProgrammer extends Programmer{};

class Company{
    
    public Programmer $developer;

}

function sayHelloProgramemr(Programmer $programmer){
    echo "Hello Programmer $programmer->name" . PHP_EOL;

}



?>