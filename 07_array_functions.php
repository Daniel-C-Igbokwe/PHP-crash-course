<?php

$fruits = ['apple', 'orange', 'pear'];

// echo count($fruits);
// Get length

// Search array
// var_dump(in_array('apples', $fruits));

// Add to an array

$fruits[] = 'grape';
array_push($fruits, 'blueberry');
array_unshift($fruits, 'mango');

//Remove from the array
// array_pop($fruits);
// array_shift($fruits);
// // 

// Split into two chunks
// $chunked_array = array_chunk($fruits, 2);
// print_r($chunked_array);


// print_r($fruits);

// $arr1 = [1, 2, 3];
// $arr2 = [4, 5, 7];

// $arr3 = array_merge($arr1, $arr2);
// $arr4 = [...$arr_1, ...$arr2];

// print_r($arr3);

$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];

$c = array_combine($a, $b);

// print_r($c);

$keys = array_keys($c);
// print_r($keys);

$flipped = array_flip($c);
// print_r($flipped);

$numbers = range(1, 20);
// print_r($numbers);

// print_r($numbers);

$newNumber = array_map(function ($number) {
    return "Number  ($number)";
}, $numbers);

// 

// $lessThan10 = array_filter($numbers, fn($number) =>
//     $number <= 10);

// // 

$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);

var_dump($sum);

