<?php

// Medellin PHP Staff
// Get just those users that have a Twitter account
$subject = [
    'Yeiner Fernandez @yeinerf',
    'Alvaro Agamez',
    'Esteban Beltran sergies@gmail.com',
    'Andres Quiroz',
    'Alex Urbano @asgaroth.belem',
    'Alexandra Vargas'
];

Should this work?
$twitters = [];
foreach ($subject as $name) {
 if (strpos($name, '@') !== false) {
     $twitters[] = $name;
 }
}

print_r($twitters);

// This will work
// $pattern = "/\B@\w+\b/";
// $twitters = preg_grep($pattern, $subject);

// print_r($twitters);
