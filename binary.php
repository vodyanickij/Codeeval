<?php

$fh = fopen($argv[1], "r");
while (false !== ($test =fgets($fh))){
    
    echo (decbin($test))."\n";
}

?>