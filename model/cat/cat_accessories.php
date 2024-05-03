<?php
  class CatAccessories extends Cat{
    public $type = 'Accessories';

    public function __construct(string $_size)
    {
      $this->size = $_size;
    }
  }
?>