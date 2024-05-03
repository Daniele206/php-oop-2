<?php
  class Dog extends Product{
    public $animal = 'Dog';

    public function __construct(string $_size)
    {
      $this->size = $_size;
    }
  }
?>