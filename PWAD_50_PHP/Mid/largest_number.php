<!-- Find out the largest numbers among three: -->
<br>
<?php
      $num1=100;
      $num2=150;
      $num3=200;
      if($num1>$num2 && $num1>$num3){
        echo "Largest number : ". $num1;
      }
      else{
        if($num2>$num1 && $num2>$num3){
          echo "Largest number : ". $num2;
        }
        else
          echo "Largest number : " . $num3;
      }

   
    //   $largest=max(15,18,22);
    //   echo "This is largerst Number : $largest";
 
    // $numbers=array("a"=>"15","b"=>"180","c"=>"22");
    // echo max ($numbers);

?>

