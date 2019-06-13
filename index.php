<?php
require_once('menu.php');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Café Nishida Daiki</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="menu-wrapper container">
    <h1 class="logo">Café Nishida Daiki</h1>
    <div class="menu-items">
      <?php foreach ($menues as $menu): ?>
        <h3><?php echo $menu->name ?></h3>
      <?php endforeach ?>
    </div>
  </div>
</body>
</html>