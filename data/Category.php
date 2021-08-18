<?php // Setter and Getter

class Category {

    private string $name;
    private bool $expensive;

    public function getname():string 
    {
        return $this->name;
    }
    
    public function setname(string $name):void
    {
        // membuat validasi, jika osong maka abaikan
        if (trim($name) != ""){
            $this->name = $name;
        }
    }

    public function isexpensive():string 
    {
        return $this->expensive;
    }
    
    public function setexpensive(string $expensive):void
    {
        $this->expensive = $expensive;
    }

}