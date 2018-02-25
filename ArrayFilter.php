<?php

//$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
//
//$result = array_filter($numbers, function($data) {
//    return $data > 3;
//});
//print_r($result);die('bro!');

$numbers = [20, 30, 50, 100, 150, 180];

function isBig($number) {
    return $number > 100;
}

$result[] = array_filter($numbers, "isBig");
print_r($result);

//$pedro = new StdClass();
//$pedro->title = 'Mr Pedro';
//$pedro->age = 40;
//$pedro->footballClub = 'RCDE';
//
//$dolly = new StdClass();
//$dolly->title = 'Mrs Dolly';
//$dolly->age = 26;
//$dolly->footballClub = 'RCDE';
//
//$john = new StdClass();
//$john->title = 'Mr John';
//$john->age = 26;
//$john->footballClub = 'RCDE';
//
//$people = [$pedro, $dolly, $john];
//
//$result[] = array_filter($people, function($data) {
//    return $data->footballClub == 'RCDE';
//});
//print_r($result);


