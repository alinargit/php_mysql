<?php

$employees = [
    [
        "name" => "Alice Johnson",
        "age" => 28,
        "position" => "Software Engineer"
    ],
    [
        "name" => "Bob Smith",
        "age" => 35,
        "position" => "Project Manager"
    ],
    [
        "name" => "Cathy Brown",
        "age" => 42,
        "position" => "UX Designer"
    ],
    [
        "name" => "David Wilson",
        "age" => 30,
        "position" => "Data Analyst"
    ]
];

foreach ($employees as $employee) {
    echo "Name: " . $employee["name"] . "<br>";
    echo "Age: " . $employee["age"] . "<br>";
    echo "Position: " . $employee["position"] . "<br><br>";
}






?>