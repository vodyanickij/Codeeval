<?php

$fh = fopen($argv[1], "r");
while(false !== ($test = fgets($fh))) {
    
  $str = explode("|",trim($test));
  $strrar = str_split($str[0]);
  $num = explode(" ", trim($str[1]));
  $output = "";
  
  foreach ($num as $values){
  	$output .= $strrar[intval($values)-1];
  }
  
  echo $output . "\n";

}

?>