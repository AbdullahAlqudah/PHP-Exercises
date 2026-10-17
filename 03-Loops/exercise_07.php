<?php
$count = 10;
$a = 0;
$b = 1;
$sequence = [];
for ($i = 0; $i < $count; $i++) {
    $sequence[] = $a;
    $next = $a + $b;
    $a = $b;
    $b = $next;
}
echo implode(', ', $sequence);
