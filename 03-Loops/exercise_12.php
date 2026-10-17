<?php
echo '<pre>';
for ($i = 1; $i <= 9; $i++) {
    $count = $i <= 5 ? $i : 10 - $i;
    echo str_repeat(' ', 5 - $count);
    for ($j = 0; $j < $count; $j++) echo chr(65 + $j) . ' ';
    echo "
";
}
echo '</pre>';
