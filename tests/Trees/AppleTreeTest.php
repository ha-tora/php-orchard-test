<?php

use PHPUnit\Framework\TestCase;
use Test\Orchard\Fruits\Apple;
use Test\Orchard\ITree;
use Test\Orchard\Trees\AppleTree;

class AppleTreeTest extends TestCase
{
    protected $appleTree;

    public function setUp(): void
    {
        $this->appleTree = new AppleTree;
    }

    public function test_apple_tree_is_tree()
    {
        $this->assertInstanceOf(ITree::class, $this->appleTree);
    }

    public function test_apple_tree_is_apple_tree()
    {
        $this->assertEquals($this->appleTree->getTreeType(), 'Apple Tree');
    }

    public function test_apple_tree_gives_apples()
    {
        $fruits = $this->appleTree->getFruits();

        $this->assertIsArray($fruits);
        $this->assertInstanceOf(Apple::class, $fruits[0]);
        $this->assertTrue(count($fruits) <= 50);
        $this->assertTrue(count($fruits) >= 40);
    }
}