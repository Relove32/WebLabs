<?php

$expression = $_POST["expression"];

function evaluatePostfix(string $expression): int
{
    $stack = [];
    $tokens = explode(' ', $expression);

    foreach ($tokens as $token) {
        if (is_numeric($token)) {
            $stack[] = (int) $token;
        } else {
            $operand2 = array_pop($stack);
            $operand1 = array_pop($stack);

            switch ($token) {
                case '+':
                    $stack[] = $operand1 + $operand2;
                    break;
                case '-':
                    $stack[] = $operand1 - $operand2;
                    break;
                case '*':
                    $stack[] = $operand1 * $operand2;
                    break;
            }
        }
    }

    return $stack[0];
}

$result = evaluatePostfix($expression);
echo $result . PHP_EOL;

?>