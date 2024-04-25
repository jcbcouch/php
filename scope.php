<?php
$x = 5; // global scope

function myTest() {
  $y = 5; // local scope
  // using x inside this function will generate an error
  //echo "<p>Variable x inside function is: $x</p>";

  // The global keyword is used to access a global variable from within a function.
  global $x;
  echo "$x <br>";

  $a = $GLOBALS['x'] + $GLOBALS['x'];
  echo "$a <br>";
}

myTest();


echo "<p>Variable x outside function is: $x</p>";

// using y outside the function will generate an error
//echo "<p>Variable y outside function is: $y</p>";


// You can have local variables with the same name in different functions, 
// because local variables are only recognized by the function in which they are declared.

function staticFunction() {
  static $k = 0;
  echo "$k ";
  $k++;
}

staticFunction();
staticFunction();
staticFunction();
?>