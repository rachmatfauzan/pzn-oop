<?php 

// namespace vendor/data/subclass
namespace Data\One{

    class Conflict{
        var $name = "ajiz";
        function call($name)
        {   
            $this->name = $name;
            return "Data - 1 a/n= $this->name" . PHP_EOL;
        }
    }
    class Dummy {
       
    }
    class Sample {
        
    }
}

namespace Data\Two{
    class Conflict{
        function call(){
            return "Data - 2" . PHP_EOL;
        }
    }
}

?>