<?php

$text = $_GET['text'];

function removeExtraAsterisks(string $string): string
{
  $result = '';
  $asterisk_found = false;

  for ($i = 0; $i < strlen($string); $i++) {
    if ($string[$i] === '*') {
      if (!$asterisk_found) {
        $result .= '*';
        $asterisk_found = true;
      }
    } else {
      $result .= $string[$i];
      $asterisk_found = false;
    }
  }

  return $result;
}

echo (removeExtraAsterisks($text));