<?php
echo "<pre>";
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) echo ($j <= 5 - $i ? 1 : $i) . ' ';
    echo "
";
}
echo "</pre>";
