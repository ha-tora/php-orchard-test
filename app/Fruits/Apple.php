<?php

namespace Test\Orchard\Fruits;

use Test\Orchard\IFruit;

class Apple implements IFruit
{
    protected $fruitType = 'Apple';

    protected $weight;

    public function __construct()
    {
        $this->weight = rand(150, 180);
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