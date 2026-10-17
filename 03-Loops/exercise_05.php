<?php
echo "<pre>";
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) echo ($i == $j ? $i : 0) . ' ';
    echo "
";
}
echo "</pre>";
