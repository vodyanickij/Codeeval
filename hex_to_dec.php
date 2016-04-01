<?php
$fh = fopen($argv[1], "r");
while (false !== ($test = fgets($fh))) {
    
    $num = hexdec($test);
    
    echo $num . "\n";

}

?>