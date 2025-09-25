<?php

class Product1
{
    private string $title;
    private float $price;
    private int $quantity;

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


$product = new Product1();
$product->setTitle('table')->setPrice(20)->setQuantity(3);

echo "<p>J'ai acheté " . $product->getQuantity() . " " . $product->getTitle() . " à " . $product->getPrice() . "€ chacune!</p>";

$objet = new Product1();
$objet->setTitle('chaise')->setPrice(240.25)->setQuantity(13);

echo "<p>J'ai acheté " . $objet->getQuantity() . " " . $objet->getTitle() . " à " . $objet->getPrice() . "€ chacune!</p>";