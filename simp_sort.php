<?php

$fh = fopen($argv[1], "r");
while (false!==($num = fgets($fh))) {

    $num = explode(' ', trim($num));

    sort($num);

    echo implode(' ', $num) . PHP_EOL;

}

?>