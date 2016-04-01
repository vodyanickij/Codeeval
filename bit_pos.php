<?php 

$fh = fopen($argv[1], 'r');

while (false !== ($t = fgets($fh))){
	$a = explode(',', trim($t));

	$bit1 = ($a[0] >> ($a[1]-1)) & 1;
	$bit2 = ($a[0] >> ($a[2]-1)) & 1;

	echo (($bit1 == $bit2) ? 'true' : 'false') . PHP_EOL;
}