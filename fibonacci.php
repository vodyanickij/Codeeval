<?php

function fibonacci($num) {
    if ($num >= 2){
        return fibonacci($num - 1) + fibonacci($num - 2);
    }elseif ($num == 1) {
        return 1;
    }else {
        return 0;
    }
}

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
$num = fgets($fh);

echo fibonacci($num) . "\n";

}
fclose($fh);
?>
