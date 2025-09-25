<?php

abstract class Animal
{
    private string $name;
    private string $type;
    private int $age;

    public function __construct(string $name, string $type, int $age)
    {
        $this->name = $name;
        $this->type = $type;
        $this->age = $age;
    }

    public function displayAnimal(): string
    {
        return "<p>l'animal s'apelle $this->name, c'est un $this->type et il a $this->age ans.</p>";
    }


    public function getName(): ?string
    {
        return $this->name;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): static
    {
        $this->age = $age;
        return $this;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): static
    {
        $this->type = $type;
        return $this;
    }
}

class Chat extends Animal
{
    public function miaule()
    {
        return "<p>miiiiiiiiiiiiiiiiiiaaaaaaaaaaaaaaouuuuuuuuu!</p>";
    }
}

class Chien extends Animal
{
    public function aboie()
    {
        return "<p>wouaf wouaf wouaf !!</p>";
    }
}

$sparrow = new Chat('Sparrow', 'Européen', 1);
$athena = new Chat('Athéna', 'Européen', 3);

$rhubarbe = new Chien('Rhubarbe', 'Berger des shetland', 4);

echo $sparrow->displayAnimal();
echo $sparrow->miaule();
echo $athena->miaule();
echo $rhubarbe->displayAnimal();
echo $rhubarbe->aboie();