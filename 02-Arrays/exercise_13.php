<?php
$numbers = range(11, 20);
shuffle($numbers);
echo implode(' ', $numbers);
