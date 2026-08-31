<?php
/* 
    Find the Largest Number

    Given:

    $a = 25;
    $b = 81;
    $c = 43;

    Find the largest number without using max() and without putting them into an array.

    Expected:

    81

*/

$a = 25;
$b = 81;
$c = 43;

// Ipagpalagay muna natin na si $a ang pinakamalaki
$largest = $a;

if ($b > $largest) {
    $largest = $b;
}

if ($c > $largest) {
    $largest = $c;
}

echo $largest; // Output: 81
