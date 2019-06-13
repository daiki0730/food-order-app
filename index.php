<?php

class Menu {
  public $name;

  public function __construct($name) {
    $this->name = $name;
  }

  public function hello(){
    echo '注文は'.$this->name.'です';
  }
}

$curry = new Menu('CURRY');
echo '<br>';
$pasta = new Menu('PASTA');
echo '<br>';

echo $curry->hello();
echo '<br>';
echo $pasta->hello();

?>