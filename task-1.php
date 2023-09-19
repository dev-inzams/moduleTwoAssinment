<?php
function allEvenNumbersForLoop( $start, $end, $steps ) { //for loop function
    for ( $i = $start; $i <= $end; $i += $steps ) { //for loop
        if ( $i % 2 === 0 ) {
            echo "$i \n";
        }
    }
}
allEvenNumbersForLoop( 1, 20, 1 ); //function calling

echo "\n";
echo "\n";

// same function in while loop
function allEvenNumbersWhileLoop( $startWhile, $endwhile, $stepsWhile ) { //while loop function
    $i = $startWhile;
    while ( $i < +$endwhile ) { //while loop
        if ( $i % 2 === 0 ) {
            echo "$i \n";
        }
        $i = $i + $stepsWhile;
    }
}
allEvenNumbersWhileLoop( 2, 20, 1 ); //while loop calling

echo "\n";
echo "\n";

// same function in do while loop
function allEvenNumbersDoWhileLoop( $startDoWhile, $endwDohile, $stepsDoWhile ) { // Dowhile loop function
    $i = $startDoWhile;
    do { //dowhile loop
        if ( $i % 2 === 0 ) {
            echo "$i \n";
        }
        $i = $i + $stepsDoWhile;
    } while ( $i <= $endwDohile );
}
allEvenNumbersDoWhileLoop( 2, 20, 1 ); //Do while loop calling

?>


