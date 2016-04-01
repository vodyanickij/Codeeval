<?php

$fh = file($argv[1]);

foreach($fh as $str){
    
    list($haystack,$needle) = explode(',', rtrim($str, "\n"));
    
    $s = strrpos($haystack,$needle);
        
        echo ($s !== false) ? "$s\n" : "-1\n";
    
}

?>