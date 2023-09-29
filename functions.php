<?php
function writeMsg() {
  echo "Hello world!";
}

writeMsg(); // call the function

function familyName($fname) {
    echo "$fname Refsnes.<br>";
  }
  
  familyName("Jani");
  familyName("Hege");
  familyName("Stale");
  familyName("Kai Jim");
  familyName("Borge");


  function familyName2($fname, $year) {
    echo "$fname Refsnes. Born in $year <br>";
  }
  
  familyName2("Hege", "1975");
  familyName2("Stale", "1978");
  familyName2("Kai Jim", "1983");


  function addNumbers(int $a, int $b) {
    return $a + $b;
  }
  echo addNumbers(5, "5 days");
  // since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
?> 