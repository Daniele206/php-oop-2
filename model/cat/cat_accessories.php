<?php

  require_once __DIR__ . '/../avvaible.php';
  class CatAccessories extends Cat{
    use Avvaible;

    public $type = 'Accessories';
    public $name;
    public $img;

    public function __construct(string $_size, string $_name, string $_img)
    {
      $this->size = $_size;
      $this->name = $_name;
      $this->img = $_img;
    }
  }
?>