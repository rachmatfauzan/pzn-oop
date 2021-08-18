<?php 

class Category {

    private string $name; 
    private bool $expensive;

    
    
    public function getname():string
    {
        return $this->name;
    }
    
    public function setname(String $name):void
    {
        $this->name = $name;
    }
    
    
    public function isexpensive() {
        return $this->expensive;
    }

    public function setexpensive(bool $expensive) {
        $this->expensive = $expensive;
    }

}

?>