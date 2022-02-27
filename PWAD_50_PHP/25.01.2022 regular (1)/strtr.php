<?php
$texts = array('<b>'=>'<strong>','</b>'=>'</strong>');
$content = '<b> Today In PHP-Powered News</b>';
echo strtr($content,$texts);
?>