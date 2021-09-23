<?php

// while loop and print even

function returnEven()
{
    $output = 0;
    $num = 0;
    while ($num <= 10) {
        if ($num % 2 == 0) {
            $output += $num;
        }
        $num++;
    }
    return "Total sum of all even numbers from 1 to 10 is " . $output . "\n";
}


print(returnEven());

// do while loop and print odd numbers from 1-10

function returnOdd()
{
    $output = 0;
    $num = 0;
    do {
        if ($num % 2 != 0) {
            $output += $num;
        }
        $num++;
    } while ($num <= 10);
    return "Total sum of all odd numbers from 1 to 10 is " . $output;
}

print(returnOdd());
