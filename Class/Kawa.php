<?php

class Kawa extends Moto implements kawaInterface
{
    private $isKawai;

    public function __construct($marque, $model, $prix, $topCase, $isKawai)
    {
        parent::__construct($marque, $model, $prix, $topCase);
        $this->isKawai= $isKawai;
    }

    public function getisKawai()
    {
        return $this->isKawai;
    }

    public function setIsKawai($isKawai)
    {
        $this->isKawai = $isKawai;
    }


}
