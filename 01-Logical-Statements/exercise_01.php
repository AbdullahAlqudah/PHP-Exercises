<?php
$year = 2013;
echo (($year % 400 == 0) || ($year % 4 == 0 && $year % 100 != 0)) ? "This year is a leap year" : "This year is not a leap year";
