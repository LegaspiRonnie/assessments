<?php
/* 
    5. Find the Largest Number in an Array

    Given:

    $numbers = [15, 72, 31, 99, 42, 8];

    Find the largest number without using max().

    Expected:

    99
*/
$numbers = [15, 72, 31, 99, 42, 8];
$length = count($numbers) -1 ;
$largest = $numbers[0];

for($i = 0; $i <= $length; $i++ ) {
    if($numbers[$i] > $largest) {
        $largest = $numbers[$i];
    }
}
echo $largest;
