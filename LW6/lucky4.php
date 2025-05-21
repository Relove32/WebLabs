<?php

$number1 = $_POST["number1"];
$number2 = $_POST["number2"];

function printlucky(int $number1, $number2): void
{       
    if ($number1 >= 100000 && $number1 <= 999999 && $number2 >= 100000 && $number2 <= 999999)
    {
        echo("All lucky numbers:<br>");
        for($islucky = $number1; $islucky <= $number2; $islucky++)  
        {
            $first_half = ($islucky - $islucky % 100000) / 100000 + ($islucky % 100000 - $islucky % 10000) / 10000 + ($islucky % 10000 - $islucky % 1000) / 1000;
            $second_half = ($islucky % 1000 - $islucky % 100) / 100 + ($islucky % 100 - $islucky % 10) / 10 + $islucky % 10;
            if ($first_half == $second_half) { echo($islucky . "<br>"); }
        }
    } else { echo("uncorrect input"); }
}

printlucky($number1, $number2);