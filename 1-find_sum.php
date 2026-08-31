<?php
/* 

    1. Sum Using a Loop

    Given:

    $N = 70;

    Find the sum:

    1 + 2 + 3 + ... + 70

    Expected output:

    2485

*/

$n = 70;
$index = 1;
$output = 0;

while ($index <= $n) {
    $output += $index;
    $index++;
}

echo $output; 
