<?php

$fh = fopen($argv[1], "r");
while (false !== ($test = fgets($fh))) {

    $words = explode(' ', $test);
    echo $words[count($words) - 2] . PHP_EOL;
}

?>
