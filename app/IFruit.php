<?php

namespace Test\Orchard;

interface IFruit
{
    public function getFruitType(): string;

    public function getWeight(): int;
}