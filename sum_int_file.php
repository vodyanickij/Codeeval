<?php

$fh = file_get_contents($argv[1]);

$s = explode(PHP_EOL, trim($fh));

echo array_sum($s) ;

?>
