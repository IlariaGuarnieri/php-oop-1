<?php
require_once __DIR__ . '/Model/Movie.php';

// inizializzo nuova istanza
$Barbie = new Movie('Barbie', 'un bel film', 1990);
$Barbie->subtitle= 'ciaociao';
$Barbie->director= 'Ugo';
$Gossip_girl = new Movie ('Gossip Girl', 'gossip, ragazze', 2010);
$Gossip_girl->subtitle= 'ciao2';
$Gossip_girl->director= 'Pino';
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
  
<h1>Movie:</h1>
<h2><?php $Barbie->getName() ?></h2>
<h3><?php $Barbie->getDescription() ?></h3>
<h3><?php $Barbie->getYear() ?></h3>
<h2><?php $Gossip_girl->getName() ?></h2>
<h3><?php $Gossip_girl->getDescription() ?></h3>
<h3><?php $Gossip_girl->getYear() ?></h3>
</body>
</html>