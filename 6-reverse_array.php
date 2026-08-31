<?php
/*

    6. Reverse an Array

    Given:

    $numbers = [1, 2, 3, 4, 5];

    Create a new array containing the numbers in reverse order.

    Expected:

    [5, 4, 3, 2, 1]

    Do not use array_reverse().

*/


$numbers = [1, 2, 3, 4, 5];
$reversed = [];
$length = count($numbers) - 1;
$index = 0;
while($index <= $length) {
    $reversed[] = $numbers[$length];
    $length--;
}
foreach($reversed as  $num) {
        echo $num . " ";
} 