<?php
function mult($n, $x) {
	
	for ($i = 2; $n * $i < $x; $i++) {
		$calc_num = $n * $i;
	}
	return $i;
}

$mult = array();
$fh = fopen($argv[1], "r");
while (!feof($fh)) {
	$test = trim(fgets($fh));
	$nums = explode(",", $test);
	echo $nums[1]*mult($nums[1], $nums[0]) . "\n";
}
fclose($fh);
?>