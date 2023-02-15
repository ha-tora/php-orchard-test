<?php

namespace Test\Orchard;

class Orchard
{
    protected $trees;

    public function __construct(ITree...$trees)
    {
        $this->trees = $trees;
    }

    public function addTrees(ITree...$trees): void
    {
        $this->trees = array_merge($this->trees, $trees);
    }

    public function getAllFruits(): array
    {
        $result = [];

        foreach ($this->trees as $tree) {
            if (!array_key_exists($tree->getTreeType(), $result)) {
                array_push($result, [
                    $tree->getTreeType() => [
                        'count' => 0,
                        'weight' => 0
                    ]
                ]);
            }

            $result[$tree->getTreeType()]['count'] += $tree->getFruitsCount();
            $result[$tree->getTreeType()]['weight'] += $tree->getFruitsWeight();
        }

        return $result;
    }
}