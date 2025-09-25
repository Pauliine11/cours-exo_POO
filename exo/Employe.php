<?php

class Employe
{
    private string $nom;
    private string $poste;
    private int $salaire = 2800;

    public function __construct(string $nom, string $poste, int $salaire)
    {
        $this->nom = $nom;
        $this->poste = $poste;
        $this->salaire = $salaire;
    }

    public function __toString()
    {
        return "nom : $this->nom, Prenom : $this->poste, et le salaire est $this->salaire.";
    }

    public function __clone()
    {
        $this->salaire += 10 / 100 * $this->salaire;;
    }

}

$employe1 = new Employe('Tom', 'manager', 2800);
echo "<pre>";
var_dump($employe1);
echo "</pre>";

$employe2 = clone $employe1;
echo "<pre>";
var_dump($employe2);
echo "</pre>";
