<?php
  class DogAccessories extends Dog{
    public $type = 'Accessories';
    public $name;
    public $img;

    public function __construct(string $_size, string $_name, string $_img)
    {
      if($_size != 'M' && $_size != 'S' && $_size != 'L'){
        throw new Exception('La taglia inserita non é corretta');
      }else{
        $this->size = $_size;
      }
      $this->name = $_name;
      $this->img = $_img;
    }
  }
?>