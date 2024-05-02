<?php
require_once __DIR__ . '/Model/Movie.php';

// inizializzo nuova istanza
$Barbie = new Movie('Barbie', 'un bel film', 1990, ['luca', 'mario','carla']);
$Barbie->subtitle= 'ciaociao';
$Barbie->director= 'Ugo';
$Gossip_girl = new Movie ('Gossip Girl', 'gossip, ragazze', 2010,['lucia', 'marco','mirco']);
$Gossip_girl->subtitle= 'ciao2';
$Gossip_girl->director= 'Pino';
// var_dump($Barbie);
// var_dump($Gossip_girl);

require __DIR__ . '/Partials/Head.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>php-oop-1</title>
</head>
<body>
  
<h1 class="text-center">Movie:</h1>

<div class="cont_card d-flex mx-3">
<div class="card" style="width: 18rem;">
  <div class="card-body">
  <h2><?php $Barbie->getName() ?></h2>
  <p><?php $Barbie->getDescription() ?></p>
  <p><?php $Barbie->getEcho() ?></p>
  <ul>
    <h4>Attori:</h4>
    <?php foreach ($Barbie->actors as $actor) : ?>
      <li>
        <?php echo $actor ?>
      </li>
    <?php endforeach ?>
  </ul>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <div class="card-body">
  <h2><?php $Gossip_girl->getName() ?></h2>
  <p><?php $Gossip_girl->getDescription() ?></p>
  <p><?php $Gossip_girl->getEcho() ?></p>
  <ul>
    <h4>Attori:</h4>
    <?php foreach ($Gossip_girl->actors as $actor) : ?>
      <li>
        <?php echo $actor ?>
      </li>
    <?php endforeach ?>
  </ul>
  </div>
</div>
</div>

</body>
</html>