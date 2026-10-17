<?php
function isPrime($number) {
    if ($number < 2) return false;
    for ($i = 2; $i * $i <= $number; $i++) {
        if ($number % $i == 0) return false;
    }
    return true;
}
$number = 3;
echo isPrime($number) ? "$number is a prime number" : "$number is not a prime number";
