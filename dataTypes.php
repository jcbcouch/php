<?php

// PHP supports the following data types:
// String
// Integer
// Float (floating point numbers - also called double)
// Boolean
// Array
// Object
// NULL
// Resource

// To get the data type of a variable, use the var_dump() function.
$a = 5;
var_dump($a); echo "<br>";

$b = "Hello world!";
$c = 'Hello world!';
var_dump($b); echo "<br>";
var_dump($c); echo "<br>";

$d = 10.365;
var_dump($d); echo "<br>";

$e = true;
var_dump($e); echo "<br>";

$cars = array("Volvo","BMW","Toyota");
var_dump($cars); echo "<br>";


class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  
$myCar = new Car("red", "Volvo");
var_dump($myCar); echo "<br>";

$f;
$g = null;
var_dump($f); echo "<br>";
var_dump($g); echo "<br>";


?>