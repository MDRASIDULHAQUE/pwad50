<?php  //write mode
// $file = "mytext1.txt";
// $fh=fopen($file,"w");
// //fwrite($fh,"Whatever string");
// fwrite($fh,"\n I love to my country");
// fwrite($fh,"\n I love to my country");
// fwrite($fh,"\n I love to my country");
// fwrite($fh,"\n I love to my country");
// fwrite($fh,"\n I love to my country");
?>

<?php  //appen mode
// $file = "mytext1.txt";
// $fh=fopen($file,"a");
// //fwrite($fh,"Whatever string");
// fwrite($fh,"\n I love to my country");
?>

<?php  //appen mode
$file = "mytext1.txt";
$fh=fopen($file,"a+");
echo file_get_contents($file);
fwrite($fh,"\n I love to my country");
?>

