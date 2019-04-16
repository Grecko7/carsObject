<?php
class Moto extends Vehicule implements MotoInterface {

    private $topCase;

    public function __construct($marque, $model, $prix, $topCase)
    {
        parent::__construct($marque, $model, $prix);
        $this->topCase = $topCase;
        try {
            new MotoException($this);
        } catch (Exception $e) {
            var_dump('Erreur '. $e->getMessage());
        }
    }

    public function getTopCase()
    {
        return $this->topCase;
    }

    public function setTopCase($topCase)
    {
        $this->topCase = $topCase;
    }

    public function getNbPlaces()
    {
        return $this->nbPlaces;
    }

    public function setNbPlaces($nbPlaces)
    {
        $this->nbPlaces = $nbPlaces;
    }
    private $nbPlaces;



}
?>