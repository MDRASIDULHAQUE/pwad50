
<h1>Defult argument</h1>

<?php
// function person($name, $age, $address){
// echo "Wellcome $name <br>";
// echo "Your age is $age. ";
// echo "Your address $address";
// }
// person("Rasid","24", "Dhaka");

?>


<?php



$a=15;
$example=function(){
    //global $a;
    $a =0;
    $a +=100;
    echo $a . "\n";

};
$example();
echo $a;
?>