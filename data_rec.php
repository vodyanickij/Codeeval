<? php

$arr = file($argv[1]);

foreach($arr as $string){
	
	list($sentence, $numbers) = explode(";", $string);
	$sentence = explode(" ", $sentence);
	$numbers = array_map("intval", explode(" ", $numbers));
	
	//2000 and was not However, implemented 1998 it until;9 8 3 4 1 5 7 2
	//However, it was not implemented until 1998 and 2000
	
	$arrayAswer = array();
	
	$count = count($sentence);
	for ($i = 0; $i < $count; $i++){
		$arrayAswer[$numbers[$i]] = $sentence[$i];
	}
	
	$missedkey = var_dump(array_diff(range(1, $count),array_keys($arrayAswer)));
	$missedkey = array_values($missedkey);
	$arrayAswer[$missedkey[0]] = $arrayAswer[""];
	unset($arrayAswer[""]);
	ksort($arrayAswer);
	$answer = implode(" ", $arrayAswer);
	echo "$answer\n";
}