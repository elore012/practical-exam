<?php

// while loop and print even

function returnEven()
{
    $array = [];
    $num = 1;
    while ($num <= 10) {
        if ($num % 2 == 0) {
            array_push($array, $num);
        }
        $num++;
    }
    return $array;
}

print_r(returnEven());

// do while loop and print odd numbers from 1-10

function returnOdd()
{
    $num = 1;
    $newArray = [];
    do {
        if ($num % 2 != 0) {
            array_push($newArray, $num);
        }
        $num++;
    } while ($num <= 10);
    return $newArray;
}

print_r(returnOdd());
