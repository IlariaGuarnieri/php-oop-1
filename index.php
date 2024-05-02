<?php
require_once __DIR__ . '/Model/Movie.php';

// inizializzo nuova istanza
$Barbie = new Movie('Barbie', 'un bel film', 1990);
$Gossip_girl = new Movie ('Gossip Girl', 'gossip', 2010);
var_dump($Barbie);
var_dump($Gossip_girl);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-oop-1</title>
</head>
<body>
  
<h1>Php-oop-1</h1>
</body>
</html>