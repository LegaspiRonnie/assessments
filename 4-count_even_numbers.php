<?php
/* 
    4. Count Even Numbers

    Given:

    $numbers = [12, 7, 5, 18, 20, 9, 4];

    Count how many numbers are even.

    Expected:

    4
*/

$numbers = [12, 7, 5, 18, 20, 9, 4];

$num_length = count($numbers) - 1;

$even_count = 0;
$index = 0;
while($index <= $num_length  ) {
    if ($numbers[$index] % 2 == 0) {
        echo $numbers[$index]."<br>";
        $even_count++;
    }
    $index++;
}
echo "Total: " . $even_count;