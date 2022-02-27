<?php
//============Public Visibility===================
// class grandFather
// {
//     public $name = "Rasid";
//     public function getName(){
//        return $this->name;
//     }
// }
// class daddy extends grandFather
// {
//     public function GetFatherName()
//     {
//         return $this->name;
//     }
// }
// //  $obj = new grandFather;
// //  echo $obj->name;
// //  echo $obj->getName();

//  $obj2 = new daddy;
//  echo $obj2->GetFatherName();
?>
<?php
//=======Protected Visibility=========
class grandFather
{
    protected $name = "Rasid";
    public function getName(){
       return $this->name;
    }
}
class daddy extends grandFather
{
    public function GetFatherName()
    {
        return $this->name;
    }
}
//  $obj = new grandFather;
//  echo $obj->name;
//  echo $obj->getName();

 $obj2 = new daddy;
 //echo $obj ->name;
 //echo $obj2->GetFatherName();
 $obj2=new daddy;
 echo $obj2->GetFatherName();
?>