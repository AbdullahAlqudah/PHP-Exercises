<?php
$array1 = ["color" => "red", 2, 4];
$array2 = ["a", "b", "color" => "green", "shape" => "trapezoid", 4];
echo "<pre>";
print_r(array_merge($array1, $array2));
echo "</pre>";
