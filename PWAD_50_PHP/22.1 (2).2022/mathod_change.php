<?php
//  class person
//  {
//     private $name="";
//     private $age="";
 
//     public function setName($name="")
//     {
//       $this->name=$name;
//     }
//     public function setAge($age="20")
//     {
//       $this->age=$age;
//     }
//     public function getInfo()
//     {
//       echo "Hello, My name is {$this->name} and my age is {$this->age} years.";
//     }
// }
 
// $person = new person();
//   $person->setName("Md. Rasidul Haque");
//   $person->setAge("24");
//   $person->getInfo();
?>

<?php
 class person
 {
    private $name="";
    private $age="";
 
    public function setName($name="Md. Rasidul Haque")
    {
       $this->name=$name;
       return $this;
    }
    public function setAge($age="24")
    {
       $this->age=$age;
       return $this;
    }
    public function getInfo()
    {
      echo "Hello, My name is {$this->name} and my age is {$this->age} years.";
    }
}
 
$person = new person();
  $person->setName("Md. Rasidul Haque")->setAge("24")->getInfo();
?>