<?php

function fibonacciFunFor( $total ) {
    $startNumber = 0;
    $secNumber = 1;
    for ( $i = 1; $i <= $total; $i++ ) {
        $thirdNumber = $startNumber + $secNumber;
        $startNumber = $secNumber;
        $secNumber = $thirdNumber;
        echo "$thirdNumber \n";
    }
}
fibonacciFunFor( 15 );
?>