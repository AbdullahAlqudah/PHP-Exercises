<?php
$numbers = [];
for ($i = 200; $i <= 250; $i++) {
    if ($i % 4 == 0) $numbers[] = $i;
}
echo implode(',', $numbers);
