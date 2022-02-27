<?php
$file= "text2.txt";
$fh= fopen($file,"r");

$data=fgetcsv($fh,2048,',');
var_dump($data);

?>
<br>
<br>
<?php
$file= "text2.txt";
$fh= fopen($file,"r");

$data=fgetcsv($fh,2048,',');
foreach($data as $value){
    print_r($value);
    echo "<hr>";
}
?>
<br>
<br>
<?php
$file= "text2.txt";
$fh= fopen($file,"r");


while(list($name, $email, $phone)=fgetcsv($fh,2048,',')){
    echo $name . $email . $phone . "<br>";

}
?>
<br>
<br>
<?php
$file= "text2.txt";
$fh= fopen($file,"r");


while($datas=fgetcsv($fh,',')){
    for($i=0;$i<count($datas);$i++){
        echo $datas[$i];
        echo "|";
    }
echo "<hr>";
}
?>