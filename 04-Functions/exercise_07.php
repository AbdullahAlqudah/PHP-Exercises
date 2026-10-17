<?php
function isPalindrome($text) {
    $clean = strtolower(preg_replace('/[^a-z0-9]/i', '', $text));
    return $clean === strrev($clean);
}
$text = 'Eva, can I see bees in a cave?';
echo isPalindrome($text) ? 'Yes it is a palindrome' : 'No it is not a palindrome';
