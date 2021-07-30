<?php 

namespace Data;

class Shape{

    public function getCorner(){
        return 10 . PHP_EOL;
    }
}

class Rectangle extends Shape{

    public function getCorner(){
        return 5 . PHP_EOL;
    }

    public function getParentCorner(){
        return parent::getCorner();
    }
}


?>