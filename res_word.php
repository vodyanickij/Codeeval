<?php

$fh = fopen($argv[1], "r");
while (false !== ($test = fgets($fh))){
    $word = explode(' ',trim($test));
    echo implode(array_reverse($word), ' ') . PHP_EOL;

}

?>