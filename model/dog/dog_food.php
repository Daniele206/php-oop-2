<?php
  class DogFood extends Dog{
    public $type = 'Food';

    public function __construct(string $_size)
    {
      $this->size = $_size;
    }
  }
?>