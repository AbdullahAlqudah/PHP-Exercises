<?php
function swapValues($x, $y) {
    $temp = $x;
    $x = $y;
    $y = $temp;
    return [$x, $y];
}
[$x, $y] = swapValues(12, 10);
echo "x=$x y=$y";
