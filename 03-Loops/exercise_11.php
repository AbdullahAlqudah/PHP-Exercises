<?php
$rows = 5;
$number = 1;
echo '<pre>';
for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $i; $j++) echo $number++ . ' ';
    echo "
";
}
echo '</pre>';
