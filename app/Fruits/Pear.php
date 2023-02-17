<?php

namespace Test\Orchard\Fruits;

use Test\Orchard\IFruit;

class Pear implements IFruit
{
    protected $fruitType = 'Pear';

    protected $weight;

    public function __construct()
    {
        $this->weight = rand(130, 170);
    }

    public function getFruitType(): string
    {
        return $this->fruitType;
    }

    public function getWeight(): int
    {
        return $this->weight;
    }
}