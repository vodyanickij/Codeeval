<?php

$fh = fopen($argv[1], "r");
while (false !==($test = fgets($fh))) {

list($n,$m) = explode(",", trim($test));

while($n >= $m){
    $n -= $m;
}
echo $n.PHP_EOL;
}

?>