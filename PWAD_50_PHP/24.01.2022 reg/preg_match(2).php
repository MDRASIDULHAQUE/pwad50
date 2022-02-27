<?php
$line="I love to my Countrylove! Love Country, My Country name 
is Bangladesh.";
echo preg_match_all("/\bCountry\b/",$line,$match);
print_r($match);

?>
<?php
// $userinfo ="Name: <b>Zeev suraski</b> <br> Title: <b>PHP Guru</b>
// Anything <b>Zeev Suraski</b>";
// preg_match_all("/<b> . ");
// echo 

?>