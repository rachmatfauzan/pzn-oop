<?php 


trait A{
    public function doA()
    {
        echo "a" . PHP_EOL;
    }
    public function doB()
    {
        echo "a";
    }
}

trait B{
    public function doA()
    {
        echo "A";
    }

    public function doB()
    {
        echo "B";
    }
}

class Pesan {
    use A, B {
        A::doA insteadof B; //lakukan trait A method doA abaikan  trait B
        B::doB insteadof A;
    }
}
 
$sample = new Pesan();
$sample->doA();
$sample->doB();
