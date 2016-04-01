<?php

$fh = fopen($argv[1], "r");
while (false !== ($str = fgets($fh))) {
    
    $str = mb_strtolower($str);
    
    echo $str;
}

?>