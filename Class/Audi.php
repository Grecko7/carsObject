<?php
class Audi extends Voiture implements AudiInterface {
    private $isQuatro;

    public function __construct($marque, $model, $prix, $nbPortes, $clim, $siegeChauffant, $isQuatro)
    {
        parent::__construct($marque, $model, $prix, $nbPortes, $clim, $siegeChauffant);
        $this->isQuatro = $isQuatro;
    }

    public function getisQuatro()
    {
        return $this->isQuatro;
    }

    public function setIsQuatro($isQuatro)
    {
        $this->isQuatro = $isQuatro;
    }
}
?>