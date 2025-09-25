<?php

abstract class Product4
{
    private const UNITE = "€";
    private string $title;
    private float $price;
    private int $quantity;

    public function __construct(string $title, float $price, int $quantity)
    {
        $this->title = $title;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function displayProduct()
    {
        return "<p>L'article $this->title est au prix de $this->price ". self::UNITE . " et il reste en stock $this->quantity articles</p>";  
        
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

class Meuble extends Product4
{
    public function color()
    {
        return "<p>Red</p>";
    }
}

class Vetements extends Product4
{
    public function size()
    {
        return "<p>L</p>";
    }
}

$table = new Meuble('Table ronde', 55, 4);
$chemise = new Vetements('Chemise blanche', 75, 3);

echo $table->displayProduct();
echo $table->color();
echo $chemise->size();
echo $chemise->displayProduct();

