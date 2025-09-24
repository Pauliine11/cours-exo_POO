<?php

class Voiture
{
    //propriétés de la voiture:
    public float $vitesse;
    public string $marque;
    public float $temps;

    public function calculerDistance(): string
    {
        // Calcule la distance en multipliant la vitesse par le temps et ajoute l'unité
        return $this->vitesse * $this->temps . self::getUnite();
    }

    //Méthode static est une méthode qui ne nécisste pas l'instanciation d'une classe pour y accéder
    static function getInfo(): string
    {
        return "Cette classe permet de calculer la distance parcourue par une voiture en fonction de sa vitesse et du temps passé!";
    }

    static function getUnite(): string
    {
        return "km";
    }
}

// Acceder à une méthode static
echo Voiture::getInfo();

// Création d'une instance de la classe Voiture
$voiture = new Voiture();
var_dump($voiture);

// Affectation des valeurs aux propriétés de l'objet $voiture
$voiture->vitesse = 55;
$voiture->marque = "Citroën";
$voiture->temps = 2;

// Affichage du contenu de l'objet $voiture (pour débogage)
echo "<pre>";
var_dump($voiture);
echo "</pre>";

// Calcul et affichage de la distance parcourue par la voiture
echo "<pre>";
var_dump($voiture->calculerDistance());
echo "</pre>";

$voiture2 = new Voiture();
$voiture2->marque = "BMW";
$voiture2->temps = 2;
$voiture2->vitesse = 120;

var_dump($voiture2->marque, $voiture2->calculerDistance());