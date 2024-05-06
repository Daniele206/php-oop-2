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
  require_once __DIR__ . '/data/db.php';

  // try - catch
  try{
    $dog_accessories_2 = new DogAccessories('M', 'Collare', 'https://www.perroslife.com/234-large_default/collare-regolabile.jpg',);
  } catch (Exception $e){
    var_dump($e->getMessage());
  };
  // try - catch

  //trait - avvaible
  $trait = new CatAccessories('M', 'Ciotola', 'https://www.loradeglianimali.it/64129-large_default/camon-ciotola-in-melamina-per-gatti-da-150-ml.jpg');
  
  var_dump($trait);
  //trait - avvaible

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
          <p class="card-text"><strong><?php echo $product->avvaible ?></strong></p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</body>
</html>