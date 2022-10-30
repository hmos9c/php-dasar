<?php

$values = array(10, 9, 8, 7.5);
var_dump($values);

$names = ["Sanas", "Febriyan"];
var_dump($names);

var_dump($names[0]);

$names[0] = "Akmal";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "Ardi";
var_dump($names);

var_dump(count($names));

$sanas = array(
    "id" => "sanas",
    "name" => "Sanas Febriyan",
    "age" => 22,
    "address" => array(
        "city" => "Jakarta",
        "country" => "Indonesia"
    )
);
var_dump($sanas);

var_dump($sanas["name"]);
var_dump($sanas["address"]["country"]);

$akmal = [
    "id" => "akmal",
    "name" => "Muhammad Akmal",
    "age" => 22,
    "address" => [
        "city" => "Jakarta",
        "country" => "Indonesia"
    ]
];
var_dump($akmal);