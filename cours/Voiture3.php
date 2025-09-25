<?php

class Voiture3
{
    private const UNITE = "km";
    private float $vitesse;
    private string $marque;
    private float $temps;

    public function __construct(float $vitesse, float $temps, string $marque)
    {
        $this->vitesse = $vitesse;
        $this->temps = $temps;
        $this->marque = $marque;
    }



    public function calculDistance()
    {
        if (self::validationDistance($this->vitesse, $this->temps)) {
            return $this->vitesse * $this->temps . self::UNITE;
        } else {
            return "les valeurs ne sont pas bonne";
        }
    }

    static function validationDistance($vitesse, $temps): float
    {
        if ($vitesse > 0 && $temps > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function setVitesse(float $vitesse)
    {
        $this->vitesse = $vitesse;
        return $this;
    }

    public function setMarque(string $marque)
    {
        $this->marque = $marque;
        return $this;
    }

    public function setTemps(float $temps)
    {
        $this->temps = $temps;
        return $this;
    }

    public function getMarque()
    {
        return $this->marque;
    }

    public function getTemps()
    {
        return $this->temps;
    }

    public function getVitesse()
    {
        return $this->vitesse;
    }
}

$nouvelleVoiture = new Voiture3(30, 1, 'Golf');
var_dump($nouvelleVoiture);


var_dump("le calcule " . $nouvelleVoiture->calculDistance());