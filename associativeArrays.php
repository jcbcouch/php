<?php


$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
var_dump($car);  echo "<br>";
echo $car["model"];  echo "<br>";
$car["year"] = 2024;

// To loop through and print all the values of an associative array, you could use a foreach loop, like this:
foreach ($car as $x => $y) {
    echo "$x: $y <br>";
  }

// you can declare the array first, and then add items to it:
$myCar = [];
$myCar["brand"] = "Ford";
$myCar["model"] = "Mustang";
$myCar["year"] = 1964;

// You can have arrays with both indexed and named keys:
$myArr = [];
$myArr[0] = "apples";
$myArr[1] = "bananas";
$myArr["fruit"] = "cherries";

?>