<?php

$number = $_POST["number"];

function factorial(int $n): int
{
  if ($n == 0) {
    return 1;
  } else {
    return $n * factorial($n - 1);
  }
}

$result = factorial($number);

echo "Факториал числа " . $number . " = " . $result;