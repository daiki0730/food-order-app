<?php

class Menu {
  public $name;
}

$curry = new Menu();
$curry->name = 'CURRY';

$pasta = new Menu();
$pasta->name = 'PASTA';

echo $curry->name;
echo '<br>';
echo $pasta->name;

?>