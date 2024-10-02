<?php

namespace App\Utilitaire;

class ImcController{
    protected int $poids;

    protected int $taille;
    public function __construct(int $poids, int $taille){
        $this->poids = $poids;
        $this->taille = $taille;
    }

    public function calculerImc():float
    {
        return $this->poids / ($this->taille)**2*10000;
    }


}