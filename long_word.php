<?php

$fh = fopen($argv[1], "r");
while (false != ($test = fgets($fh))) {

    $words  = explode(" ", trim($test));
    $longers = "";

    foreach($words as $key){
        if(strlen($key) > strlen($longers)){
            $longers = $key;
        }
    }
    echo $longers . PHP_EOL;
}

?>