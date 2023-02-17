<?php

namespace Test\Orchard;

interface ITree
{
    public function getTreeType(): string;

    /**
     * @return IFruit[]
     */
    public function getFruits(): array;
}