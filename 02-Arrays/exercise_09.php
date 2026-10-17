<?php
function upperColors($colors) {
    return array_map('strtoupper', $colors);
}
$colors = ["red", "blue", "white", "yellow"];
echo "<pre>";
print_r(upperColors($colors));
echo "</pre>";
