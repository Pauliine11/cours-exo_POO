<?php

class Product3
{
    private const UNITE = "€";
    private string $title;
    private float $price;
    private int $quantity;

    public function __construct(float $price, int $quantity, string $title)
    {
        $this->title = $title;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function calculTotal()
    {
        //Si la methode static reviens vrais alors:
        if (self::validationValue($this->quantity, $this->price)) {

            //Je renvoie le resultat du calcul
            return $this->quantity * $this->price . self::UNITE;
        } else {
            return "Les valeurs ne sont pas bonne.";
        }
    }

    //Méthode static qui permet de prendre deux valeurs en param 
    static function validationValue($quantity, $price): bool
    {
        //Si les deux valeurs sont sup à 0 alors 
        if (($quantity > 0) && ($price >0)) {
            //retourne vrai
            return true;
        } else {
            //retourne faux
            return false;
        }
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
        return $this;
    }

    public function setPrice(float $price)
    {
        $this->price = $price;
        return $this;
    }

    public function setQuantity(int $quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

}

$newProduct = new Product3(65, 22, 'Tabouret');
var_dump($newProduct);

echo "<pre>";
var_dump("le total est de " . $newProduct->calculTotal());
echo "</pre>";