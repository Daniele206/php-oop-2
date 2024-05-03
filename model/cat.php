<?php
  class Cat extends Product{
    public $animal = 'Cat';

    public function __construct(string $_size)
    {
      $this->size = $_size;
    }
  }
?>