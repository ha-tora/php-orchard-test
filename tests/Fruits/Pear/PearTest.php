<?php

use PHPUnit\Framework\TestCase;
use Test\Orchard\Fruits\Pear;
use Test\Orchard\IFruit;

class PearTest extends TestCase
{
    protected $pear;

    public function setUp(): void
    {
        $this->pear = new Pear;
    }

    public function test_pear_is_fruit()
    {
        $this->assertInstanceOf(IFruit::class, $this->pear);
    }

    public function test_pear_is_pear(): void
    {
        $this->assertEquals($this->pear->getFruitType(), 'Pear');
    }

    public function test_pear_weight(): void
    {
        $weight = $this->pear->getWeight();

        $this->assertTrue($weight >= 130);
        $this->assertTrue($weight <= 170);
    }
}