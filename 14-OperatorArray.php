<?php

$first = [
    "first_name" => "Sanas"
];

$last = [
    "first_name" => "Akmal",
    "last_name" => "Febriyan"
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "Sanas",
    "last_name" => "Febriyan"
];

$b = [
    "last_name" => "Febriyan",
    "first_name" => "Sanas"
];

var_dump($a == $b);
var_dump($a === $b);