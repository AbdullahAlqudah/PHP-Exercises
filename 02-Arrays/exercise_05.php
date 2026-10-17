<?php
$numbers = [1, 2, 3, 4, 5];
$location = 4;
$item = '$';
array_splice($numbers, $location - 1, 0, [$item]);
echo implode(' ', $numbers);
