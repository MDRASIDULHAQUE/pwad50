<?php
class cat
{
    public $c= "hello world";
}

function display(cat $a1)
{
    echo $a1->c;

}
display(new cat());
   
?>