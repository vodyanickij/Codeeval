<?php

$fh = fopen($argv[1], "r");
while ($test = fgets($fh)) {
    
    $s = explode(',',rtrim($test));
    $str = array_unique($s);
    
    echo implode(',', $str) . "\n";

}

?>