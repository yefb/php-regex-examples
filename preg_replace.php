<?php

$subject = [
    'medellin',
    'bogota',
    'cucuta',
    'monteria',
    'valledupar'
];

// Should this work?
// $vowels = ['a', 'e', 'i', 'o', 'u'];
// $replaced = [];
// foreach ($subject as $index => $city) {
//  $split = str_split($city);

//  foreach ($split as $index => $letter) {
//      if (in_array($letter, $vowels)) {
//          $prev_letter = isset($split[$index - 1]) ? $split[$index - 1] : '';
//          if ($prev_letter == "m") {
//              $split[$index] = '%';
//          }
//      }
//  }

//  $replaced[] = implode("", $split);
// }

// print_r($replaced);

// Search for all "m"s followed by a vowel
// $regex = '#(?<=m)[aeiou]#';

// Replace the vowels that follow an "m" by a "%" and return the replaced string
// $replaced = preg_replace($regex, '%', $subject);

// print_r($replaced);

// **************************************
// $subject = 'Lorem ipsum dolor dolor sit amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam veniam, quis nostrud exercitation ullamco laboris nisi nisi ut aliquip ex ex ea commodo consequat. Duis aute irure dolor in in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia officia deserunt mollit anim id est laborum.';

// Search for repeated words
// $regex = '#\b(\w+)\s\1\b#';

// Remove one repeated word and wrap the other between "<<<" and ">>>""
// $replaced = preg_replace($regex, '<<<$1>>>', $subject);

// print_r($replaced); echo "\n";


// Or replace the repeated work by it's Uppercase counterpart
// $replaced = preg_replace_callback($regex, function ($match) {
// 	return strtoupper($match[1]);
// }, $subject);

// print_r($replaced);