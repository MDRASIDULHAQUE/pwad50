<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<form method="post">
    <input type="text" name="x" placeholder="Enter the number:">
    <input type="submit" name="submit" value="submit">    
</form>
<?php
	if(isset($_POST['submit'])){
	$x = $_POST['x'];

	function factorial($n) { 

	  if ($n === 0)
	 {
	    return 1;
	 }
	  return $n * factorial($n-1);
         
	}
	echo  "The Factorial of $x is :" . factorial($x);
}

?>

</body>
</html>
