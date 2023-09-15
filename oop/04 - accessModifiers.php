<?php


// public - the property or method can be accessed from everywhere. This is default
// protected - the property or method can be accessed within the class and by classes derived from that class
// private - the property or method can ONLY be accessed within the class



class Fruit4 {
  public $name;
  protected $color;
  private $weight;
}

$mango = new Fruit4();
$mango->name = 'Mango'; // OK
// $mango->color = 'Yellow'; // ERROR
// $mango->weight = '300'; // ERROR

class Fruit5 {
    public $name;
    public $color;
    public $weight;
  
    function set_name($n) {  // a public function (default)
      $this->name = $n;
    }
    protected function set_color($n) { // a protected function
      $this->color = $n;
    }
    private function set_weight($n) { // a private function
      $this->weight = $n;
    }
  }
  
  $mango = new Fruit5();
  $mango->set_name('Mango'); // OK
//   $mango->set_color('Yellow'); // ERROR
//   $mango->set_weight('300'); // ERROR

?> 