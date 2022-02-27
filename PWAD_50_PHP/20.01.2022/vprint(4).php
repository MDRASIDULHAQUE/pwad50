<?php
$customers = array();
$customers[] =array("Rasidul","rasidulhaque017@gmail.com","+8801760-285478");
$customers[] =array("Abdur Rahaman","rasidulhaque017@gmail.com","+8801760-2854578");
$customers[] =array("Sajol","rasidulhaque017@gmail.com","+8801750-285478");
echo "<pre>";


foreach ($customers as $customer)
// {
//     foreach ($customer as $value){

//         echo "<pre>";
//         echo   $value;

//     }
   
// }
vprintf("<p>Name: %s<br>E-mail:%s<br>Phone:%s</p>",$customer);

?>