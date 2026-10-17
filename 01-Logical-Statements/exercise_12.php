<?php
$scores = [60, 86, 95, 63, 55, 74, 79, 62, 50];
$average = array_sum($scores) / count($scores);
if ($average < 60) $grade = "F";
elseif ($average < 70) $grade = "D";
elseif ($average < 80) $grade = "C";
elseif ($average < 90) $grade = "B";
else $grade = "A";
echo $grade;
