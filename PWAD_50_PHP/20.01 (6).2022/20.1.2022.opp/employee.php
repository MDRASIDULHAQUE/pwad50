<h1>How to creat a Object</h1>
<?php
// class Employee{
//     public $name="Fehor";
//     public $age="24";



// }

// $emp=new Employee;
// echo $emp -> name;              // -> access operator
// // echo "<br>";
// echo $emp -> age;              // -> access operator

?>

<?php
class Employee{
    private $name;
    private $age;
    public function setNameAge($x,$y){
        $this->name =$x;
        $this->age =$y;
    }
    public function getName(){
        return $this->name;
    }
    public function getAge(){
        return $this->age;
    }

    public function welcome(){
        $hello ="Hello {$this->name}({$this->age}),Welcome to OOP";
        return $hello;
    }


}

$emp= new Employee;
$emp->setNameAge("Rasid",24);
echo $emp->getName();
echo $emp->getAge();
echo $emp->welcome();

?>