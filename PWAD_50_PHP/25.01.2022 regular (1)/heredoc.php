<?php
 //string to convert array
$summary = <<<summary
Lorem ipsum dolor sit amet consectetur adipisicing elit.
Recusandae, ipsam quidem nemo animi sit cupiditate.
Voluptatibus perspiciatis voluptatum accusamus adipisci.
<a href="http://www.php.net">PHP's</a>
summary;
//echo strip_tags($summary);
$words= sizeof(explode(' ',strip_tags($summary)));
 echo "Total words in summary: $words";
?>
