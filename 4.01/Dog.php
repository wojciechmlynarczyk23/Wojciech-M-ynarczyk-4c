<?php
class Dog 
{ 
    public string $name; 
    private string $breed; 
    protected int $age; 



    public function _construct( 
        string $name, 
        string $breed, 
        int $age
    ) 
    { 
        $this->name = $name; 
        $this->breed = $breed; 
        $this->age = $age;
    } 
    public function growOlder() 
    { 
        $this->age++; 
    }
}
?>