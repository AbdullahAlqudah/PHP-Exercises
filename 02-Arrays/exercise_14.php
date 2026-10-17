<?php
$array1 = [2, 0, 10, 12, 6];
$nonZero = array_filter($array1, fn($number) => $number != 0);
echo count($nonZero) ? min($nonZero) : "No non-zero numbers";
