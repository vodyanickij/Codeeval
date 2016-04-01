<?php

$fh = fopen($argv[1], "r");
while ($test = fgets($fh)) {
    
    if ($test % 2 == 0)
    {
        echo 1 ."\n";
    }else {
        echo 0 . "\n";
    }


}

?>