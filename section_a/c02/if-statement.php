<?php 
$name     = 'Belal';
$greeting = 'Hello';

if ($name !== '') {
    $greeting = 'Welcome back, ' . $name . ', ' . 'How are you?!, Hope are you doing okay';
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>if Statement</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
    <h1>The Candy Store</h1>
    <h2><?= $greeting ?></h2>
  </body>
</html>