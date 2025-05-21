<?php

$year = $_POST["year"];

function LeapYear(int $year): string
{
    $name_year = "Не високосный";
    if($year % 400 == 0)
    {
      $name_year = "Високосный";
    }
    if(($year % 4 == 0) && ($year % 100 != 0)) 
    {
      $name_year = "Високосный";
    }
    return $name_year;
}

echo(LeapYear($year));