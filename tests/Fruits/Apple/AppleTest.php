<?php

use PHPUnit\Framework\TestCase;
use Test\Orchard\Fruits\Apple;

class AppleTest extends TestCase
{
    protected $apple;

    public function setUp(): void
    {
        $this->apple = new Apple;
    }

    public function test_apple_is_apple()
    {
        $this->assertEquals($this->apple->getFruitType(), 'Apple');
    }

    public function test_apple_weight()
    {
        $weight = $this->apple->getWeight();

        $this->assertTrue($weight >= 150);
        $this->assertTrue($weight <= 180);
    }
}