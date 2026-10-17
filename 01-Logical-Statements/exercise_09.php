<?php
$num1 = 20;
$num2 = 5;
$operation = "/";
switch ($operation) {
    case "+": echo $num1 + $num2; break;
    case "-": echo $num1 - $num2; break;
    case "*": echo $num1 * $num2; break;
    case "/": echo $num2 != 0 ? $num1 / $num2 : "Cannot divide by zero"; break;
    default: echo "Invalid operation";
}
