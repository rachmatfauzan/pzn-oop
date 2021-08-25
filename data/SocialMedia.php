<?php 

// Final Class = artinya tidak ada lagi class child yang bisa dibuat

// Final function = artinya dia tidak bisa lagi di overriding oleh kelas child 

class SocialMedia {
    public string $name;
}

final class Facebook extends SocialMedia {
    
    final public function login(string $name , string $password)
    {
        # code...
    }

}



// error
class FakeFacebook extends Facebook{

    //error
    public function login(string $name, string $password)
    {
        # code...
    }
    
}