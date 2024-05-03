<?php
  class CatFood extends Cat{
    public $type = 'Food';

    public function __construct(string $_size)
    {
      $this->size = $_size;
    }
  }
?>