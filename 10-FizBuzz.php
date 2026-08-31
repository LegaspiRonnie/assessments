<?php
/*
    10. FizzBuzz

    Using a loop from 1 to 30:

    If divisible by 3 → print Fizz
    If divisible by 5 → print Buzz
    If divisible by both → print FizzBuzz
    Otherwise → print the number

    Expected beginning:

    1
    2
    Fizz
    4
    Buzz
    Fizz
    7
    8
    Fizz
    Buzz
    ...

*/
    for($i = 1; $i <= 30; $i++) {

        if ($i % 3 == 0 && $i % 5 == 0 ) {
            echo 'FizzBuzz' . "<br>";
            continue;
        }
        if ($i % 3 == 0 ) {
            echo 'Fizz' . "<br>";
            continue;
        }
        if ($i % 5 == 0 ) {
            echo 'Buzz' . "<br>";
            continue;
        }
        echo $i . "<br>";
    }