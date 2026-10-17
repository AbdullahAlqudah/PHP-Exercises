<?php
$fruits = ["d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple"];
asort($fruits);
foreach ($fruits as $key => $fruit) echo "$key = $fruit<br>";
