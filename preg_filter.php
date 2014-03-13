<?php

// Get all cities that have an "m" followed by a vowel
$subject = [
    'medellin',
    'bogota',
    'cucuta',
    'monteria',
    'valledupar'
];

// Should this work?
$vowels = ['a', 'e', 'i', 'o', 'u'];
$replaced = [];
foreach ($subject as $index => $city) {
 $split = str_split($city);

 foreach ($split as $index => $letter) {
     if (in_array($letter, $vowels)) {
         $prev_letter = isset($split[$index - 1]) ? $split[$index - 1] : '';
         if ($prev_letter == "m") {
             $split[$index] = '%';
         }
     }
 }

 $replaced[] = implode("", $split);

 foreach ($replaced as $index => $value) {
 	if (!strpos($value, "%")) {
 		unset($replaced[$index]);
 	}
 }
}

print_r($replaced);

// This will work
// $regex = '#(?<=m)[aeiou]#';
// Return just those strings that matched the regex
// $replaced = preg_filter($regex, '%', $subject);

// print_r($replaced);