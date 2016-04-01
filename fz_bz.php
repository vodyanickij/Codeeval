<?php

$fh = fopen($argv[1], 'r');
while (($test = fgets($fh))!==false) {
    $mass = array();
    list($x, $y, $n) = explode(' ', trim($test));

    for($i = 1; $i <= $n; $i++){
        if(($i % $x == 0) && ($i % $y == 0)){
            echo "FB ";
        }
        elseif($i % $x == 0){
            echo "F ";
        }
        elseif($i % $y == 0){
            echo "B ";
        }
        else{
            echo $i." ";
        }
    }
    echo join(' ', $mass) . PHP_EOL;
}

?>