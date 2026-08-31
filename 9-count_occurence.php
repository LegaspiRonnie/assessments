<?php
/*

    9. Count Character Occurrences

    Given:

    $text = "programming";

    Find how many times the character g appears.

    Expected:

    2
    
*/

$text = "programming";
$char = 'g';
$len = strlen($text) - 1;
$char_count = 0;
for($i = 0; $i <= $len; $i++) {
    
    if ($text[$i] == $char) {
        $char_count++;
    }
}
echo $char_count;