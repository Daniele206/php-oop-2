<?php
  require_once __DIR__ . '/model/product.php';
  require_once __DIR__ . '/model/cat.php';
  require_once __DIR__ . '/model/dog.php';
  require_once __DIR__ . '/model/dog/dog_accessories.php';
  require_once __DIR__ . '/model/dog/dog_food.php';
  require_once __DIR__ . '/model/dog/dog_games.php';
  require_once __DIR__ . '/model/cat/cat_accessories.php';
  require_once __DIR__ . '/model/cat/cat_food.php';
  require_once __DIR__ . '/model/cat/cat_games.php';

  $dog_accessories = new DogAccessories('M');
  $cat_accessories = new CatAccessories('M');

  $dog_food = new DogFood('M');
  $cat_food = new CatFood('M');

  $dog_games = new DogGames('M');
  $cat_games = new CatGames('M');

  var_dump($dog_accessories);
  var_dump($cat_accessories);

  var_dump($dog_food);
  var_dump($cat_food);

  var_dump($dog_games);
  var_dump($cat_games);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP-OOP-2</title>
</head>
<body>
  <h1>PHP-OOP-2</h1>
</body>
</html>