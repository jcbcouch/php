<?php declare(strict_types=1);

//call a function
function myMessage() {
    echo "Hello world!<br>";
}
  
myMessage();

//pass an argument
function familyName($fname) {
    echo "$fname Refsnes.<br>";
}
  
familyName("Jani");


//pass multiple arguemnts
function familyName2($fname, $year) {
    echo "$fname Refsnes. Born in $year <br>";
}
  
familyName2("Hege", "1975");

//default parameter value
function setHeight($minheight = 50) {
    echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight();

//return a value
function sum($x, $y) {
    $z = $x + $y;
    return $z;
}
  
echo "5 + 10 = " . sum(5, 10) . "<br>";

//pass by reference
function add_five(&$value) {
    $value += 5;
}
  
$num = 2;
add_five($num);
echo $num; echo "<br>";

//variable number of arguments
function sumMyNumbers(...$x) {
    $n = 0;
    $len = count($x);
    for($i = 0; $i < $len; $i++) {
      $n += $x[$i];
    }
    return $n;
  }
  
$a = sumMyNumbers(5, 2, 6, 2, 7, 7);
echo $a; echo "<br>";

//strict typing
function addNumbers(float $a, float $b) : float {
    return $a + $b;
  }
echo addNumbers(1.2, 5.2); echo "<br>";

//floating point arguments with int return type
function addNumbers2(float $a, float $b) : int {
    return (int)($a + $b);
  }
echo addNumbers2(1.2, 5.2); echo "<br>";

?>