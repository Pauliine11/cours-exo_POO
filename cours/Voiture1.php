<?php

// Les méthodes set et get sont des méthodes très courantes en POO et servent à :

// Encapsuler les données: Les propriétés d'une classe sont souvent déclarées comme étant privées (private).
// Cela signifie qu'elles ne sont accessibles que depuis l'intérieur de la classe.
// Les méthodes set et get permettent de modifier ou de récupérer la valeur de ces propriétés de manière contrôlée.

class Voiture1
{
    //propriétés de la voiture:
    private float $vitesse;
    private string $marque;
    private float $temps;

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

    public function calculeDistance()
    {
        return $this->vitesse * $this->temps . 'KM';
    }
}

$audi = new Voiture1;
$audi->setMarque('Audi');
$audi->setVitesse(230)->setTemps(2);


echo "<p>" . $audi->calculeDistance() . " </p>";

echo "<p>" . $audi->getMarque() . "</p>";