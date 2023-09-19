<?php

$startNumber = 0;
$secNumber = 1;

for($i = 1; $i<=10; $i++){
    $thirdNumber = $startNumber + $secNumber; // next number 
    $startNumber = $secNumber;
    $secNumber = $thirdNumber;
    if($thirdNumber>100){
        break;
    }
    echo "$thirdNumber \n";
}

?>


