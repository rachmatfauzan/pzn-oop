<?php 

// INTINYA OVERIDE PADA TRAIT
/*
    => means 'ter-override'
    $ClassParrent => trait => ClasChild;
*/ 

namespace Data\Traits;

trait SayGoodBye{

    public function goodBye(?string $name):void 
    {
        if (is_null($name)){
            echo "Good Bye" . PHP_EOL;
        }else {
            echo "Good Bye {$name}" . PHP_EOL;
        }
    }
}

trait HasName{
    public string $name;
}

trait CanRun{
    abstract public function run():void;
}

trait SayHello{

    public function hello(?string $name):void 
    {
        if (is_null($name)){
            echo "Hello You" . PHP_EOL;
        }else {
            echo "Hello {$name}" . PHP_EOL;
        }
    }
}

class Person{
    use SayHello, SayGoodBye, HasName, CanRun;

    public function run()
    {
        echo "Ini orang $this->name, Dapat berlari" . PHP_EOL;
    }
}
