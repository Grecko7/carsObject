<?php
    interface AudiInterface extends VoitureInterface {
        public function getisQuatro();
        public function __construct($marque, $model, $prix, $nbPortes, $clim, $siegeChauffant, $isQuatro);
        public function setIsQuatro($isQuatro);
    }
?>