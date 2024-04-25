<?php

// echo has no return value while print has a return value of 1 so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print.

echo "<h2>PHP is Fun!</h2>";
echo ("Hello world!<br>");
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";


$txt1 = "Learn PHP";
$txt2 = "jacobcouch.com";
$x = 5;
$y = 4;

echo "<h2>" . $txt1 . "</h2>";
echo "Study PHP at " . $txt2 . "<br>";
echo $x + $y;



print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";

$txt1 = "Learn PHP";
$txt2 = "jacobcouch.com";
$x = 5;
$y = 4;

print "<h2>" . $txt1 . "</h2>";
print ("Study PHP at " . $txt2 . "<br>");
print $x + $y;
?>