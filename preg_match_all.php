<?php


$text = 'Lorem ipsum dolor dolor sit amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi nisi ut aliquip ex ex ea commodo consequat. Duis aute irure dolor in in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia officia deserunt mollit anim id est laborum.';

// Would this work?
// $exploded = explode(" ", $text);
// $found = [];
// foreach ($exploded as $index => $word) {
//  $next_word = isset($exploded[$index + 1]) ? $exploded[$index + 1] : "";
//  if ($word == $next_word) {
//      $found[] = $word;
//  }
// }

// print_r($found); echo "\n";


// Search for all repeated words
// $regex = '#\b(\w+)\s\1\b#';

//Get all the matches
// preg_match_all($regex, $text, $matches);

// print_r($matches);
