<?php
  class VoitureException extends Exception {
    private $allowedMark = ["Renault", "Audi", "Ford"];
    public function __construct(Voiture $voiture) {
        if(!in_array($voiture->getMarque(), $this->allowedMark)) {
          throw new Exception('La voiture que vous avez cherché n\'est pas dans le catalogue');
        }
    }
  }
?>