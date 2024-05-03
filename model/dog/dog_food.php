<?php
  class DogFood extends Dog{
    public $type = 'Food';
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