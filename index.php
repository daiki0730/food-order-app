<?php

class Menu {
  public $name;

  public function __construct() {
    echo '注文が入りました';
  }

  public function hello(){
    echo '注文は'.$this->name.'です';
  }
}

$curry = new Menu();
echo '<br>';
$pasta = new Menu();
echo '<br>';
$curry->name = 'CURRY';
$pasta->name = 'PASTA';

echo $curry->hello();
echo '<br>';
echo $pasta->hello();

?>