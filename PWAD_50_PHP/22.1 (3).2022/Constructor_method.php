<?php

// class Car {
//   private $model;
   
//   //__construct
//   public function __construct ($model)
//   {
//     $this -> model = $model;
//   }
    
//   public function getCarModel()
//   {
//     return ' The car model is: ' . $this -> model;
//   }
// }
   
// //We pass the value of the variable once we create the object
// $car1 = new Car("Mercedes"); // Passing Argument to Constructor Parameter
   
// echo $car1 -> getCarModel();
?>

<?php
class car
{   
    private $name;
    public function __construct($name){
        echo $this->name = $name;
    }
    public function sayHello(){
        echo "Hello World";
    }
    public function __destruct()
    {
        echo "I'am about to disappear - bye bye!";
    }
}
new car("BMW");
$obj->sayHello();
?>