<?php

class Person{
    public $name;
    public function __construct($name)
    {
        $this->$name =$name;
    }
    
}
$Obj1 = new Person('Rasid');
echo "<pre>";
var_dump($Obj1);


$Obj2 =clone $Obj1;
$Obj2->name = 'Karim';
var_dump($Obj2);
echo "<pre>";
?>