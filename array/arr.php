<?php

// $months = ["January", "February", "March", "April", "May"];

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

echo $person["months"][3];
