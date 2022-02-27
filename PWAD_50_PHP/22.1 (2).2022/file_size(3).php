<?php
$filepath = "../22.1.2022/myfile.txt";
echo $data =filesize($filepath);

echo $kb = round($data/1024,2);

?>