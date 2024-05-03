<?php
  class CatGames extends Cat{
    public $type = 'Games';

    public function __construct(string $_size)
    {
      $this->size = $_size;
    }
  }
?>