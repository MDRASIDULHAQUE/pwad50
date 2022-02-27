<?php
$drive = "C:/";
//echo diskfreespace("G:/");
$byte = diskfreespace($drive);
$kb=$byte/1024;
$mb=$kb/1024;
echo $gb=$mb/1024;

?>