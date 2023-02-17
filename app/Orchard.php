<?php

namespace Test\Orchard;

class Orchard
{
    protected $trees = [];

    protected $fruits = [];

    public function __construct(ITree...$trees)
    {
        $this->trees = $trees;
    }

    public function addTrees(ITree...$trees): void
    {
        $this->trees = array_merge($this->trees, $trees);
    }

    public function collectFruits(): void
    {
        $fruits = [];

        foreach ($this->trees as $tree) {
            $fruits = array_merge($fruits, $tree->getFruits());
        }

        $this->fruits = $fruits;
    }

    public function getAllFruits(): array
    {
        return $this->fruits;
    }

    public function getFruitsCount(): array
    {
        $result = [];

        foreach ((array) $this->fruits as $fruit) {
            if (!array_key_exists((string) $fruit->getFruitType(), $result)) {
                $result[$fruit->getFruitType()] = 0;
            }

            $result[$fruit->getFruitType()] += 1;
        }

        return $result;
    }

    public function getFruitsWeight()
    {
        $result = [];

        foreach ($this->fruits as $fruit) {
            if (!array_key_exists($fruit->getFruitType(), $result)) {
                $result[$fruit->getFruitType()] = 0;
            }

            $result[$fruit->getFruitType()] += $fruit->getWeight();
        }

        return $result;
    }
}