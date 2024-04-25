<?php
# This is also a single-line comment

/* 
This is a
multi-line 
comment 
*/

echo "Welcome Home!"; // Outputs a welcome message

// A variable starts with the $ sign, followed by the name of the variable
// A variable name must start with a letter or the underscore character
// A variable name cannot start with a number
// A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
// Variable names are case-sensitive ($age and $AGE are two different variables)
$x = 5;
$y = "John";

$txt = "jacobcouch.com";
echo "I love $txt!";
echo "I love " . $txt . "!";



// You can assign the same value to multiple variables in one line:
$a = $b = $c = "Fruit";
?>