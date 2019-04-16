<?php

 abstract class Vehicule implements VehiculeInterface
{
    protected $marque;
    protected $model;
    protected $prix;

    public function __construct($marque, $model, $prix)
    {
        $this->marque = $marque;
        $this->model = $model;
        $this->prix = $prix;
    }

    public function getMarque()
    {
        return $this->marque;
    }

    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;
    }
}

?>