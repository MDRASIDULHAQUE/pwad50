<html>  
<head>  
<title>Factorial Program using loop in PHP</title>  
</head>  
<body>  
<form method="post">  
    Enter the Number:<br>  
    <input type="text" name="number" id="number">  
    <input type="submit" name="submit" value="Submit" />  
</form>  
<?php
if(isset($_POST['submit'])){       //$_POST is super,global post
   $n = $_POST['number'];
   $count=0;
   if($n==1){
   $count ++;
}
for($i=2; $i<$n; $i++)
{
    if($n%$i==0) {
        $count++;
    }
}
if($count == 0){
    echo "This is a prime number";
}else{
    echo "This is a not prime number";
}
}
?>  
</body>  
</html>