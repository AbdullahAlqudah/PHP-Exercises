<?php
function lowerColors($colors) {
    return array_map('strtolower', $colors);
}
$colors = ["RED", "BLUE", "WHITE", "YELLOW"];
echo "<pre>";
print_r(lowerColors($colors));
echo "</pre>";
