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
    return "Total sum of all odd numbers from 1 to 10 is " . $output . "\n";
}

print(returnOdd());

function fibonacci($input)
{
    $num1 = 0;
    $num2 = 1;
    $output = 0;

    for ($i = 0; $i <= $input; $i++) {

        $output = $num1 + $num2;
        $num1 = $num2;
        $num2 = $output;

        echo $output . ",";
    }
}

print(fibonacci((10)));
print("\n");


$arrayOfName = ["Marvin", "Marco", "Marvin", "Marco", "Marco", "Marvin", "Christian"];
sort($arrayOfName);
$total = array_count_values($arrayOfName);
$maxNum = max($total);
$result = array_keys($total, $maxNum);
foreach ($result as $key => $value) {
    echo $value . "  ";
}
