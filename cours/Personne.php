<?php

class Personne
{
    private string $nom;
    private string $prenom;
    private int $salaire = 1000;

    public function __construct($nom, $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    /**
     * Convertit l'objet en chaîne de caractères.
     *
     * Cette méthode magique est appelée automatiquement lorsqu'on essaie d'utiliser l'objet dans un contexte où une chaîne de caractères est attendue (par exemple, dans un echo ou un print).
     * Elle retourne une représentation textuelle de l'objet, ici composée du nom, du prénom et du nombre.
     *
     */
    public function __toString()
    {
        return "nom : $this->nom, Prenom : $this->prenom, et le salaire est $this->salaire.";
    }

    /** 
     * Clone l'objet.
     *
     * Cette méthode magique est appelée automatiquement lorsqu'on utilise l'opérateur de clonage (clone).
     * Elle permet de créer une copie indépendante de l'objet original. 
     * Ici, elle modifie spécifiquement la propriété "autorisation" de la copie.
     *
     */
    public function __clone()
    {
        $this->prenom = "Balamini";
    }

    public function prime()
    {
        $this->salaire += 200;
    }
}

$mohamed = new Personne('ZEKALMI', 'Mohamed');
echo "<pre>";
var_dump($mohamed);
echo "</pre>";

$balamini = clone $mohamed;
echo "<pre>";
var_dump($balamini);
echo "</pre>";


$mohamed->prime();
$mohamed->prime();
$mohamed->prime();

echo "<pre>";
var_dump($mohamed);
echo "</pre>";