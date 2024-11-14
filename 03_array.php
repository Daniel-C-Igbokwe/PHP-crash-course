<?php

$numbers = [1,44,52,22];
$fruits = array('banana', 'grape', 'pear');

// var_dump($numbers);
echo $fruits[1];

// Associative Array
$hex = [
    'red' => '#f00',
    'green' => '#0f0',
    'blue' => '#00f',
];

echo $hex['blue'];



$people = [
    [
        'first_name' => 'Brad',
        'last_name' => 'Traversy',
        'email' => 'bradtravery@gmail.com'
    ],
    [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'email' => 'johndoe@gmail.com'
    ],
    [
        'first_name' => 'Dan',
        'last_name' => 'Igbokwe',
        'email' => 'danemeka@gmail.com'
    ],
];

// echo $people[1]['email'];
var_dump(json_encode($people));
