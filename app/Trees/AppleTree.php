<?php

namespace Test\Orchard\Trees;

use Test\Orchard\Fruits\Apple;
use Test\Orchard\ITree;

class AppleTree implements ITree
{
    protected $treeType = 'Apple Tree';
    protected $minFruitsCount = 40;
    protected $maxFruitsCount = 50;

    public function getTreeType(): string
    {
        return $this->treeType;
    }

    public function getFruits(): array
    {
        $fruits = [];
        $fruitsCount = rand($this->minFruitsCount, $this->maxFruitsCount);

        for ($i = 0; $i < $fruitsCount; $i++) {
            array_push($fruits, new Apple);
        }

        return $fruits;
    }
}