<?php

class Menu {
  public $name;
  public function hello(){
    echo 'hello';
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