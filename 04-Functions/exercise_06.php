<?php
function isArmstrong($number) {
    if ($number < 0) return false;
    $digits = str_split((string)$number);
    $sum = 0;
    foreach ($digits as $digit) $sum += (int)$digit ** 3;
    return $sum == $number;
}
$number = 407;
echo isArmstrong($number) ? "$number is Armstrong Number" : "$number is not Armstrong Number";
