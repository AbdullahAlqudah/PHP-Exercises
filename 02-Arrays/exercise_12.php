<?php
$words = ["abcd", "abc", "de", "hjjj", "g", "wer"];
$lengths = array_map('strlen', $words);
echo "The shortest array length is " . min($lengths) . ". The longest array length is " . max($lengths) . ".";
