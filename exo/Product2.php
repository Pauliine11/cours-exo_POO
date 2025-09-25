<?php

class Product2
{
    private string $title;
    private float $price;
    private int $quantity;


    public function calculTotal(): float | string
    {
        //Si la methode static reviens vrais alors:
        if (self::validationValue($this->quantity, $this->price)) {

            //Je renvoie le resultat du calcul
            return $this->quantity * $this->price;
        } else {
            return "Les valeurs ne sont pas bonnes !!";
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

    //Les SET
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

    //LES GET

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

$product = new Product2();
$product->setTitle("canapé")->setQuantity(11)->setPrice(89);

//var_dump($product->calculTotal());
echo "<p>J'ai acheté " . $product->getQuantity() . " " . $product->getTitle() . " à " . $product->getPrice() . "€ chacun !</p>";
echo "<p> Le prix total est donc de " . $product->calculTotal() ."€</p>";