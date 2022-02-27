<?php

$primes = array(2,3,5,7,11,13,17,19,23,29,31,37,41,43,47);

for($i=1;$i++;$i<1000){

    $random = rand(1,50);
    if(in_array($random,$primes)){
        echo "$random This is the number we found from the prime list";
        break;
    }
    else{
        echo "$random is not prime number <br>";
    }
}


?>