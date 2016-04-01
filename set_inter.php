<?php

$fh = fopen($argv[1], "r");
while (false !==($test = fgets($fh))) {
    $num = explode(";", trim($test));
    
 $intersection = array_intersect(explode(",", $num[0]),explode(",", $num[1]));
 $intersection = implode(",", $intersection);
 
   echo $intersection . PHP_EOL;
}

?>