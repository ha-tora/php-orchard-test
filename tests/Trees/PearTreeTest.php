<?php

use PHPUnit\Framework\TestCase;
use Test\Orchard\ITree;
use Test\Orchard\Fruits\Pear;
use Test\Orchard\Trees\PearTree;

class PearTreeTest extends TestCase
{
    protected $pearTree;

    public function setUp(): void
    {
        $this->pearTree = new PearTree;
    }

    public function test_pear_tree_is_tree()
    {
        $this->assertInstanceOf(ITree::class, $this->pearTree);
    }

    public function test_pear_tree_is_pear_tree()
    {
        $this->assertEquals($this->pearTree->getTreeType(), 'Pear Tree');
    }

    public function test_pear_tree_gives_pears()
    {
        $fruits = $this->pearTree->getFruits();

        $this->assertIsArray($fruits);
        $this->assertInstanceOf(Pear::class, $fruits[0]);
        $this->assertTrue(count($fruits) <= 20);
        $this->assertTrue(count($fruits) >= 0);
    }
}