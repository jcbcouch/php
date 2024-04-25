<?php


$cars = array("Volvo", "BMW", "Toyota");
$myArr = array("Volvo", 15, ["apples", "bananas"]);

// You can also use a shorter syntax by using the [] brackets:
$cars2 = ["Volvo", "BMW", "Toyota"];

// Line breaks are not important, so an array declaration can span multiple lines:
// A comma after the last item is allowed:
$cars3 = [
    "Volvo",
    "BMW",
    "Toyota",
  ];

// When creating indexed arrays the keys are given automatically, starting at 0 and increased by 1 for each item, so the array above could also be created with keys:
$cars4 = [
    0 => "Volvo",
    1 => "BMW",
    2 =>"Toyota"
  ];


// You can declare an empty array first, and add items to it later:
$cars5 = [];
$cars5[0] = "Volvo";
$cars5[1] = "BMW";
$cars5[2] = "Toyota";

echo count($cars); echo "<br>";


// In indexed arrays each item has an index number.
// By default, the first item has index 0, the second item has item 1, etc.
var_dump($cars);  echo "<br>";
// To access an array item you can refer to the index number.
echo $cars[0];  echo "<br>";
// To change the value of an array item, use the index number:
$cars[1] = "Ford";
var_dump($cars);  echo "<br>";

array_push($cars, "nissan");
// To loop through and print all the values of an indexed array, you could use a foreach loop, like this:
foreach ($cars as $x) {
    echo "$x <br>";
  }




?>