<?php
require_once __DIR__ . '/Model/Movie.php';

// inizializzo nuova istanza
$barbie = new Movie('Barbie', 'un bel film', 1990, ['luca', 'mario','carla']);
$barbie->subtitle= 'Fantasia';
$barbie->director= 'Greta Gerwig';

$gossip_girl = new Movie ('Gossip Girl', 'gossip, ragazze', 2010,['lucia', 'marco','mirco']);
$gossip_girl->subtitle= 'Adolescenza';
$gossip_girl->director= 'Amy Heckerling';

$re_leone = new Movie('Il Re Leone','classici disney',2005, ['simba', 'nala', 'mufasa']);
$re_leone->subtitle= 'Il cerchio della vita';
$re_leone->director= 'Walt Disney';
// var_dump($barbie);
// var_dump($gossip_girl);

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
  <h2><?php $barbie->getName() ?></h2>
  <p><?php $barbie->getDescription() ?></p>
  <p><?php $barbie->getEcho() ?></p>
  <ul>
    <h4>Attori:</h4>
    <?php foreach ($barbie->actors as $actor) : ?>
      <li>
        <?php echo $actor ?>
      </li>
    <?php endforeach ?>
  </ul>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <div class="card-body">
  <h2><?php $gossip_girl->getName() ?></h2>
  <p><?php $gossip_girl->getDescription() ?></p>
  <p><?php $gossip_girl->getEcho() ?></p>
  <ul>
    <h4>Attori:</h4>
    <?php foreach ($gossip_girl->actors as $actor) : ?>
      <li>
        <?php echo $actor ?>
      </li>
    <?php endforeach ?>
  </ul>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <div class="card-body">
  <h2><?php $re_leone->getName() ?></h2>
  <p><?php $re_leone->getDescription() ?></p>
  <p><?php $re_leone->getEcho() ?></p>
  <ul>
    <h4>Attori:</h4>
    <?php foreach ($re_leone->actors as $actor) : ?>
      <li>
        <?php echo $actor ?>
      </li>
    <?php endforeach ?>
  </ul>
  </div>
</div>


</div>

</div>

</body>
</html>