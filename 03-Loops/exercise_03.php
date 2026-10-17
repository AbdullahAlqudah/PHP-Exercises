<?php
echo "<pre>";
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) echo ($j < 4 - $i ? 'A' : chr(65 + $i)) . ' ';
    echo "
";
}
echo "</pre>";
