<?php

$subject = '[Mercury],[Venus], [Earth] , [Mars] ,[Jupiter]';

// Should this work?
// $planets = explode(",", $subject);

// print_r($planets);

// // // hmmm, this would be necesary
// foreach ($planets as $index => $planet) {
// 	$planets[$index] = trim($planet);
// }

// print_r($planets);

// This would work better
// $pattern = '/\s?,\s?/';
// $planets = preg_split($pattern, $subject);

// print_r($planets);