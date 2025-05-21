<?php

$digit = $_POST["digit"];

function WhatDigit(int $digit): string
{
    $nodigit= "ERROR";
    if ($digit == 0)
    {
        $nodigit = "Ноль";
    }
    if ($digit == 1)
    {
        $nodigit = "Один";
    }
    if ($digit == 2)
    {
        $nodigit  = "Два";
    }
    if ($digit == 3)
    {
        $nodigit  = "Три";
    }
    if ($digit == 4)
    {
        $nodigit  = "Четыре";
    }
    if ($digit == 5)
    {
        $nodigit  = "Пять";
    }
    if ($digit == 6)
    {
        $nodigit  = "Шесть";
    }
    if ($digit == 7)
    {
        $nodigit = "Семь";
    }
    if ($digit == 8)
    {
        $nodigit  = "Восемь";
    }
    if ($digit == 9)
    {
        $nodigit = "Девять";
    }
    return $nodigit;
}

echo (WhatDigit($digit));

