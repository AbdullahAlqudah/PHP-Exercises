<?php
function removeDuplicates($numbers) {
    return array_values(array_unique($numbers));
}
$array1 = [2, 4, 7, 4, 8, 4];
echo '<pre>';
print_r(removeDuplicates($array1));
echo '</pre>';
