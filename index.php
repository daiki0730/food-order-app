<?php

class Menu {
  public $name;
  public function hello(){
    echo '注文は'.$this->name.'です';
  }
}

$curry = new Menu();
$pasta = new Menu();
$curry->name = 'CURRY';
$pasta->name = 'PASTA';

echo $curry->hello();
echo '<br>';
echo $pasta->hello();

?>