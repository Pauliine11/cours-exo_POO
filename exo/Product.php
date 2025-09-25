<?php

class Product
{
    public string $title;
    public float $price;
    public int $quantity;
    public float $total;

    public function totalFunction(): float
    {
        $this->total = $this->quantity * $this->price;
        return $this->total;
    }
}

$commode = new Product();
$commode->price = 20;
$commode->title = 'Commode';
$commode->quantity = 3;
$commode->totalFunction();

var_dump($commode);

$product = new Product();
$product->title = 'balle de foot';
$product->price = 5.36;
$product->quantity = 2;
$product->totalFunction();

var_dump($product);

echo "<p>Les " . $commode->title . "s coûte au total : $commode->total €</p>";
echo "<p>Les $product->title coûte au total : $product->total €</p>";

//le produit la quantité et le total 