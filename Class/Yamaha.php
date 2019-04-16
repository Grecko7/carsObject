<?php
class Yamaha extends Moto implements YamahaInterface
{
    protected $isKawai;

    public function __construct($marque, $model, $prix, $topCase, $isKawai)
    {
        parent::__construct($marque, $model, $prix, $topCase);
        $this->isKawai=$isKawai;
 
    }

    public function getisKawai()
    {
        // TODO: Implement getisKawai() method.
    }

    public function setisKawai()
    {
        // TODO: Implement setisKawai() method.
    }
}