<?php
  class DogAccessories extends Dog{
    public $type = 'Accessories';

    public function __construct(string $_size)
    {
      $this->size = $_size;
    }
  }
?>