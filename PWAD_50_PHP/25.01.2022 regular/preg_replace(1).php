<?php
// $text = "This is a link to http://www.wjgilmore.com/.";
// echo preg_replace("/http:\/\/(.*)\//","<a herf=\"\${0}\">\${0}</a>",$text);
?>

<?php
$string = "April 15, 2003";
$pattern = "/(\w+) (\d+), (\d+)/i";
$replacements = '${1} 14, 2007';
echo preg_replace($pattern,$replacements,$string);
?>