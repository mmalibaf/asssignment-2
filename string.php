<?php

function countVowels($str) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;
    foreach (str_split($str) as $char) {
        if (in_array(strtolower($char), $vowels)) {
            $count++;
        }
    }
    return $count;
}

function reverseString($str) {
    return strrev($str);
}

function processStrings($strings) {
    foreach ($strings as $str) {
        $vowelCount = countVowels($str);
        $reversedStr = reverseString($str);
        echo "Original String: $str, Vowel Count: $vowelCount, Reversed String: $reversedStr\n";
    }
}

// Example usage
$strings = ["Hello", "World", "PHP", "Programming"];
processStrings($strings);

?>
