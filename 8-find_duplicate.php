<?php
/*
    8. Find Duplicate Numbers

    Given:

    $numbers = [1, 4, 2, 4, 5, 1, 7];

    Find the numbers that appear more than once.

    Expected:

    1
    4

    Try doing this using nested loops.
*/

// $numbers = [1, 4, 2, 4, 5, 1, 7];
// $duplicated = [];
// $length = count($numbers) - 1;

// for($i = 0; $i < $length; $i++) {
//     for($j =$i + 1; $j < $length; $j++) {
//         if ($numbers[$i] == $numbers[$j]) {
//             echo $numbers[$i];
//             break;
//         }
//     }
// }


$numbers = [10, 20, 30, 40, 50];
$sum = 0;
foreach($numbers as $number) {
    $sum += $number;
}

echo $sum;