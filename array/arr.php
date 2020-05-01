<?php

$months = ["January", "February", "March", "April", "May"];
$person = [
    "name" => "John ",
    "surname" => "Doe ",
    "age" => 30,
    "months" => [
                    "January",
                    "February",
                    "March",
                    "April",
                    "May"
    ]
];

// echo $person["name"];
// echo $person["surname"];
// echo $person["age"];

echo $person["months"][3];
