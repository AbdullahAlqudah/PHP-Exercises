<?php
function isLowercase($text) {
    return $text === strtolower($text);
}
$text = 'remove';
echo isLowercase($text) ? 'Your String is Ok' : 'Your String is not lowercase';
