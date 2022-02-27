<?php

$student1=array(
    array("Name"=>"Student1","mcq"=>40,"descriptive"=>37,"evidence"=>30),
    array("Name"=>"Student2","mcq"=>40,"descriptive"=>29,"evidence"=>25), 
    array("Name"=>"Student3","mcq"=>40,"descriptive"=>39,"evidence"=>30),
    array("Name"=>"Student4","mcq"=>30,"descriptive"=>35,"evidence"=>30),
    array("Name"=>"Student5","mcq"=>30,"descriptive"=>25,"evidence"=>30),
    array("Name"=>"Student6","mcq"=>50,"descriptive"=>29,"evidence"=>30),
    array("Name"=>"Student7","mcq"=>30,"descriptive"=>30,"evidence"=>20),
    array("Name"=>"Student8","mcq"=>40,"descriptive"=>45,"evidence"=>35),
    array("Name"=>"Student9","mcq"=>40,"descriptive"=>35,"evidence"=>40)
);
    

foreach($student1 as $val){
    $total = $val['mcq'] + $val['descriptive'];
    $evi = $val['evidence'];

    if($total>69 && $evi>29){
        echo $val["Name"] .  " : Pass" . "<br>";
    }else{
        echo  $val['Name'] .  " : Fail" . "<br>"; 
    }
}
?>