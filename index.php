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

  $db = [
    $dog_accessories = new DogAccessories('M', 'Collare', 'https://www.perroslife.com/234-large_default/collare-regolabile.jpg'),
    $cat_accessories = new CatAccessories('M', 'Ciotola', 'https://www.loradeglianimali.it/64129-large_default/camon-ciotola-in-melamina-per-gatti-da-150-ml.jpg'),
    $dog_food = new DogFood('M', 'Crocchette', 'https://petgreen.shop/media/catalog/product/cache/a8f52adc57a106b2558dcaca7a8745d6/e/n/energy_eco_mantenimento_web_.jpg'),
    $cat_food = new CatFood('M', 'Scatolette', 'https://www.libero.it/shopping/wp-content/uploads/2021/07/cibo-umido-per-gatti_sheba.jpg'),
    $dog_games = new DogGames('M', 'Osso di gomma', 'https://www.farmacosmo.it/166170-large_default/goodie-bone-large-osso-gomma-cani-112686.jpg'),
    $cat_games = new CatGames('M', 'Gomitolo di lana', 'https://m.media-amazon.com/images/I/71AYVSdtzhL.jpg'),
  ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP-OOP-2</title>
</head>
<body class="bg-primary">
  <h1 class="text-center fw-bold py-5">PHP-OOP-2</h1>
  <div class="container d-flex flex-wrap justify-content-center">
    <?php foreach($db as $product):?>
      <div class="card m-3 position-relative w-25" style="width: 18rem;">
      <h5 class="card-title bg-success position-absolute pt-1 pb-2 px-2 rounded-1 fw-bold text-light"><?php echo $product->animal ?></h5>
        <img src="<?php echo $product->img ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $product->name ?></h5>
          <h5 class="card-title">Tipologgia: <strong><?php echo $product->type ?></strong></h5>
          <p class="card-text">Taglia dell'animale: <strong><?php echo $product->size ?></strong></p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</body>
</html>