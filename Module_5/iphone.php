<?php
echo "<pre>";


$iphones = [
    ["model" => "iPhone 14", "releaseYear" => 2022, "price" => "$799"],
    ["model" => "iPhone 13", "releaseYear" => 2021, "price" => "$699"],
    ["model" => "iPhone 12", "releaseYear" => 2020, "price" => "$599"],
    ["model" => "iPhone 11", "releaseYear" => 2019, "price" => "$499"],
    ["model" => "iPhone SE (3rd Gen)", "releaseYear" => 2022, "price" => "$429"]
];


$colWidths = [
    "model" => 20,
    "releaseYear" => 15,
    "price" => 10
];


function padCell($string, $width) {
    return str_pad($string, $width);
}


echo padCell("Model", $colWidths["model"]) . 
     padCell("Release Year", $colWidths["releaseYear"]) . 
     padCell("Price", $colWidths["price"]) . PHP_EOL;


echo str_repeat("-", array_sum($colWidths)) . PHP_EOL;


foreach ($iphones as $iphone) {
    echo padCell($iphone["model"], $colWidths["model"]) .
         padCell($iphone["releaseYear"], $colWidths["releaseYear"]) .
         padCell($iphone["price"], $colWidths["price"]) . PHP_EOL;
    

    echo PHP_EOL;
}

echo "</pre>";
?>
