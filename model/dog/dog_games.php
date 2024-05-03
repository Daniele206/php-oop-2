<?php
  class DogGames extends Dog{
    public $type = 'Games';

    public function __construct(string $_size)
    {
      $this->size = $_size;
    }
  }
?>