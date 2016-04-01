<?php

$fh = fopen($argv[1], "r");
while (false !== ($test = fgets($fh))) {

$words = explode(" ", trim($test));
foreach ($words as & $word) {
        $str = strlen($word);
        $tem = $word[$str - 1];
        
        $word[$str - 1] = $word[0];
        $word[0] = $tem;
        }
    
    echo join(" ", $words) . PHP_EOL;
}

?>