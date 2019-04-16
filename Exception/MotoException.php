<?php
  class MotoException extends Exception {
    private $allowedMark = ["Kawasaki", "Ktm", "Yamaha", "Honda"];
    public function __construct(Moto $moto) {
        if(!in_array($moto->getMarque(), $this->allowedMark)) {
          throw new Exception('La moto que vous avez cherché n\'est pas au catalogue');
        }
    }
  }
?>