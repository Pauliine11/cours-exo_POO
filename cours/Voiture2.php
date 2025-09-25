<?php

class Voiture2
{
    private float $vitesse;
    private string $marque;
    private float $temps;

    //Méthode public qui calcule la vitesse x le temps
    public function calculerDistance(): float | string
    {
        //Si la methode static reviens vrais alors:
        if (self::validationDistance($this->vitesse, $this->temps)) {

            //Je renvoie le resultat du calcul
            return $this->vitesse * $this->temps;
        } else {
            return "Les valeurs ne sont pas bonnes !!";
        }
    }

    //Méthode static qui permet de prendre deux valeurs en param 
    static function validationDistance($vitesse, $temps): bool
    {
        //Si les deux valeurs sont sup à 0 alors 
        if (($vitesse > 0) && ($temps > 0)) {
            //retourne vrai
            return true;
        } else {
            //retourne faux
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

$maVoiture1 = new Voiture2();
$maVoiture1->setVitesse(-1)->setTemps(0);

$maVoiture2 = new Voiture2();
$maVoiture2->setVitesse(25)->setTemps(20);

var_dump($maVoiture1->calculerDistance());
var_dump($maVoiture2->calculerDistance());