<?php
/* 
    7. Sort Ascending — Nested Loops

    Given:

    $numbers = [5, 2, 8, 1, 3];

    Sort the numbers in ascending order:

    1 2 3 5 8

    Do not use sort() or any sorting function.

    Hint: You will probably need nested loops and swapping.
*/

$numbers = [5, 2, 8, 1, 3];
$numbers = [2, 5, 8, 1, 3];
$numbers = [2, 5, 1, 3, 8];
$length =  count($numbers) - 1;

for ($i = 0; $i < $length; $i++) {
    for($j = 0; $j < $length; $j++) {
       if ($numbers[$j] > $numbers[$j+1]) {
            $temp = $numbers[$j];
            $numbers[$j] = $numbers[$j + 1];
            $numbers[$j + 1] = $temp;
       }
    }
}
foreach($numbers as $num) {
    echo $num . " ";
}