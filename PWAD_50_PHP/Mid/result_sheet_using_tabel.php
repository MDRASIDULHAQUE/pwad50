
Result sheet using table:
<?php


$students = array("Rasid"=>"80","Abdur"=>"75","Sojol"=>"85","Fehor"=>"90","Alamin"=>"70");

echo "<table border=1>";


echo "<tr>";
echo "<td> Name </td>";
echo "<td> score </td>";
echo "<tr>";


      foreach($students as $key=>$value){
          echo "<td>$key</td>";
          echo "<td>$value</td>";
          echo "<tr>";
      }   
echo "</table>";
      $x=max($students);
      $y= min($students);

      $result1=array_search($x,$students);
      $result2=array_search($y,$students);

      echo "Maximum number: $x";
      echo "<br>";

      echo "Minimum number: $y";
      echo "<br>";
      echo " Name: First  ->" . $result1;
      echo "<br>";
      echo " Name: Last  ->" . $result2;



