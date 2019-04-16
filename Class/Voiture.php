<?php
 abstract class Voiture extends Vehicule {
    protected $nbPortes;
    protected $clim;
    protected $siegeChauffant;

    public function __construct($marque, $model, $prix, $nbPortes, $clim, $siegeChauffant)
    {
        parent::__construct($marque, $model, $prix);
        $this->nbPortes = $nbPortes;
        $this->clim = $clim;
        $this->siegeChauffant = $siegeChauffant;
        try {
            new VoitureException($this);
        } catch (Exception $e) {
            var_dump('Erreur '. $e->getMessage());
        }
    }

    public function getNbPortes()
    {
        return $this->nbPortes;
    }

    public function setNbPortes($nbPortes)
    {
        $this->nbPortes = $nbPortes;
    }

    public function getClim()
    {
        return $this->clim;
    }

    public function setClim($clim)
    {
        $this->clim = $clim;
    }

    public function getSiegeChauffant()
    {
        return $this->siegeChauffant;
    }

    public function setSiegeChauffant($siegeChauffant)
    {
        $this->siegeChauffant = $siegeChauffant;
    }
}
?>