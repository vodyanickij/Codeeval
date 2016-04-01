<?php
$fh = fopen($argv[1], 'r');
while(false !== ($test = fgets($fh))){
    list($numbers,$swaps) = explode(":", trim($test));
    
    $numbers = explode(" ",trim($numbers));
    $swaps = explode(",", trim($swaps));
    
    foreach($swaps as $swap){
        list($left,$right) = explode("-", trim($swap));
        
        $temp = $numbers[$left];
        $numbers[$left] = $numbers[$right];
        $numbers[$right] = $temp;
        
    }
    
echo join(' ',$numbers) . PHP_EOL;    
    
}
?>
