<?php
/*
    🟢 Level 1 — Beginner
    Challenge 1: Even or Odd

    Task:

    Write a program that:

    Accepts an integer from the user.
    Determines whether the number is even or odd.
    Displays the result.

    Example:

    Input: 8
    Output: Even
    Input: 13
    Output: Odd 
*/

// $n = 97;

// if ($n % 2 == 0) {
//     echo "Even";
//     exit;
// }
// echo "Odd";

// $n1 = 20;
// $n2 = 20;

// if ($n1 > $n2) {
//     echo $n1 . " Is bigger";
//     exit;
// } else if ($n2 > $n1 ) {
//     echo $n2 . " Is bigger";
//     exit;
// } else {
//     echo $n1 . " and " . $n2 . " are equal";
// }

// $n = 0;

// if ($n > 0) {
//     echo "Positive";
// } else if ($n < 0 ) {
//     echo "Negative";
// } else {
//     echo "Zero";
// }

// $n = 10;
// $output = 0;
// for($i = 1; $i <= $n; $i ++) {
//     $output += $i;
// }
// echo $output;

// $n = 10;

// for($i = 1; $i <= $n; $i ++) {
//     echo $i . "<br>";
// }

// $n = 10;
// $even_num = 0;
// for($i = 1; $i <= $n; $i++) {
//     if ($i % 2 == 0) {
//         $even_num += 1;
//     }
// }
// echo $even_num;

// $n = 10;
// $total = 0;
// for ($i = 1; $i <= $n; $i++) {
//     if ($i % 2 == 0 ) {
//         $total += $i;
//     }
// }
// echo $total;

// $numbers = [12, 45, 7, 23, 89, 34];
// $largest = $numbers[0];
// for ($i = 1; $i < count($numbers) - 1; $i++) {
//     if ($numbers[$i] > $largest) {
//         $largest = $numbers[$i];
//     }
// }

// echo $largest;

// $numbers = [12, 45, 7, 23, 89, 34];

// $smallest = $numbers[0];

// foreach($numbers as $number) {
//     if ($number < $smallest) {
//         $smallest = $number;
//     }
// }
// echo $smallest;

// $text = "Hello";
// $text_len = strlen($text) - 1;
// while ($text_len >= 0) {
//     echo $text[$text_len];
//     $text_len--;
// }


// $text = 'Hello World';
// $text_len = strlen($text) - 1;
// $vowels = ['a','e,','i','o','u'];
// $vowel_count = 0;
// for ($i = 0; $i <= $text_len; $i++) {
//     if(in_array($text[$i], $vowels)) {
//         $vowel_count += 1;
//     }
// }
// echo $vowel_count;


// $text = 'poop';
// $len = strlen($text) - 1;
// $reversed = '';
// while ($len >= 0) {
//     $reversed .= $text[$len];
//     $len--;
// }
// if ($reversed == $text) {
//     echo "Palindrom";
// } else {
//     echo "Not palindrome";
// }


// $text = "programmingggg";
// $character = "g";
// $char_count = 0;
// $text_length = strlen($text);

//     for ($j = 0; $j < $text_length; $j++) {
//         if ($text[$j] == $character) {
//             $char_count += 1;
//         }
//     }

//     echo $char_count;

// $numbers = [10, 20, 30, 40, 50];
// $sum = 0;
// foreach ($numbers as $number) {
//     $sum += $number;
// }
// echo $sum;


// $numbers = [1, 2, 3, 2, 4, 5, 1, 6];
// $count = count($numbers);
// $duplicated_number = [];
// for ($i = 0; $i < $count; $i++) {
//     for ($j = $i + 1; $j < $count; $j++) {
//         if ($numbers[$i] == $numbers[$j]) {
//             if (!in_array($numbers[$i], $duplicated_number)) {
//               $duplicated_number[] = $numbers[$i];  
//             }
            
//         }
//     }
// }
// foreach ($duplicated_number as $n) {
//     echo $n . "<br>";
// }

// $numbers = [10, 25, 8, 40, 15, 40, 30];
// $count = count($numbers)-1;
// for ($i = 0; $i < $count - 1; $i++) { 
//     for ($j = 0; $j < $count - 1 - $i; $j++) { 
//         if ($numbers[$j] > $numbers[$j+1]) { 
//             $temp = $numbers[$j]; 
//             $numbers[$j] = $numbers[$j+1]; 
//             $numbers[$j+1] = $temp; 
//         } 
//     } 
// }

// echo $numbers[$count]; 

// $numbers = [1, 2, 3, 5, 6];
// $len = count($numbers) - 1;
// for ($i = 0; $i < $len; $i++) {
//     if () {
//         echo $numbers[$i] + 1;
//     }
// }

// $numbers = [10, 20, 30, 40, 50];
// $sum = 0;
// foreach($numbers as $number) {
//     $sum += $number;
// }
// echo $sum;

// $numbers = [10, 25, 8, 40, 15, 40, 30];
// $sorted_numbers = [];

// $n_count = count($numbers) - 1;
// for($i = 0; $i < $n_count; $i++) {
//    for ($j = 0 ; $j < $n_count; $j++) {
//     if ($numbers[$j] > $numbers[$j+1]) {
//         $temp = $numbers[$j];
//         $numbers[$j] = $numbers[$j+1];
//         $numbers[$j+1] = $temp;
//     }
//    }
// }
// for ($k = 0; $k < $n_count; $k++) {
//     if (!in_array($numbers[$k], $sorted_numbers)) {
//         $sorted_numbers[] = $numbers[$k];
//     }
// }
// $second_largest = $sorted_numbers[count($sorted_numbers) -2];
// echo $second_largest;



// $numbers = [10, 25, 8, 40, 15, 40, 30];

// $largest = PHP_INT_MIN;
// $secondLargest = PHP_INT_MIN;

// foreach ($numbers as $number) {

//     if ($number > $largest) {

//         $secondLargest = $largest;
//         $largest = $number;

//     } elseif ($number > $secondLargest && $number < $largest) {

//         $secondLargest = $number;

//     }

// }

// echo $secondLargest;

// $numbers = [10, 5, 20, 10, 8, 5, 30, 20];
// $duplicated = [];
// $nl = count($numbers) -1;
// for($i = 0; $i <= $nl; $i++) {
//     for ($j = $i + 1; $j <= $nl; $j++) {
//         if ($numbers[$i] == $numbers[$j]) {
//             if (!in_array($numbers[$i], $duplicated)) {
//                 $duplicated[] = $numbers[$i];
//             }
            
//         }
//     }
// }

// foreach ($duplicated as $d) {
//     echo $d."<br>";
// }



// $text = "swwiiss";

// $found = false;

// for ($i = 0; $i < strlen($text); $i++) {

//     $count = 0;

//     for ($j = 0; $j < strlen($text); $j++) {

//         if ($text[$i] == $text[$j]) {
//             $count++;
//         }

//     }

//     if ($count == 1) {
//         echo $text[$i];
//         $found = true;
//         break;
//     }
// }

// if (!$found) {
//     echo "No non-repeating character";
// }
 
// $text = "swiiss";

// $tl    = strlen($text);
// $found = false;

// for ( $i = 0; $i < $tl; $i++ ) {

//     $count = 0;

//     for ( $j = 0; $j < $tl; $j++ ) {

//         if ( $text[$i] == $text[$j] ) {
//             $count++;
//         }

//     }

//     if ( $count == 1 ) {
//         echo $text[$i];
//         $found = true;
//         break;
//     }

    
// }

// if(!$found) {
//     echo "No repeating number";
// }


// $text1 = "listen";
// $text2 = "silents";

// $t1 = strlen($text1);
// $t2 = strlen($text2);

// if ($t1 != $t2) {
//     echo "Not anagram ";
//     exit;
// }

// for ( $i = 0; $i < )