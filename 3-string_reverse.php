<?php
/*
    3. Reverse a String

    Given:

    $text = "HELLO";

    Reverse it without using strrev().

    Expected:

    OLLEH
*/

$text  = 'HELLO';
$text_count = strlen($text) - 1;
$reversed = '';
while($text_count >= 0) {
    $reversed .= $text[$text_count];
    $text_count -= 1;
}
echo $reversed;


