<?php

$fh = fopen($argv[1], "r");
while ($str = fgets($fh)) {

    $str = ucwords($str);

    echo $str;

}

?>