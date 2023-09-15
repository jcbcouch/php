<?php

// The final keyword can be used to prevent class inheritance or to prevent method overriding.

// The following example shows how to prevent class inheritance:
final class Fruit8 {
  // some code
}


// The following example shows how to prevent method overriding:
class Fruit9 {
    final public function intro() {
      // some code
    }
  }


?> 