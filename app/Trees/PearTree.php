<?php

namespace Test\Orchard\Trees;

use Test\Orchard\Fruits\Pear;
use Test\Orchard\ITree;

class PearTree implements ITree
{
    protected $treeType = 'Pear Tree';
    protected $minFruitsCount = 0;
    protected $maxFruitsCount = 20;

    public function getTreeType(): string
    {
        return $this->treeType;
    }

    public function getFruits(): array
    {
        $fruits = [];
        $fruitsCount = rand($this->minFruitsCount, $this->maxFruitsCount);

        for ($i = 0; $i < $fruitsCount; $i++) {
            array_push($fruits, new Pear);
        }

        return $fruits;
    }
}