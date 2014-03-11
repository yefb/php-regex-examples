<?php

$subject = [
	'medellin',
	'bogota',
	'cucuta',
	'monteria',
	'valledupar'
];

// Search for all "m"s followed by a vowel
// $regex = '#(?<=m)[aeiou]#';

// Replace the vowels that follow an "m" by a "%" and return the replaced string
// $replaced = preg_replace($regex, '%', $subject);

// print_r($replaced);

// Return just those strings that matched the regex
// $replaced = preg_filter($regex, '%', $subject);

// print_r($replaced);

// **************************************
// $subject = 'Lorem ipsum dolor dolor sit amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam veniam, quis nostrud exercitation ullamco laboris nisi nisi ut aliquip ex ex ea commodo consequat. Duis aute irure dolor in in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia officia deserunt mollit anim id est laborum.';

// Search for repeated words
// $regex = '#\b(\w+)\s\1\b#';

// Remove one repeated word and wrap the other between "<<<" and ">>>""
// $replaced = preg_replace($regex, '<<<$1>>>', $subject);

// print_r($replaced); echo "\n";