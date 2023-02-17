<?php

use PHPUnit\Framework\TestCase;
use Test\Orchard\Fruits\Apple;
use Test\Orchard\Orchard;
use Test\Orchard\Trees\AppleTree;
use Test\Orchard\Trees\PearTree;

class OrchardTest extends TestCase
{
    public function test_orchard_contructor()
    {
        $trees = [
            new AppleTree,
            new AppleTree,
            new PearTree
        ];

        $orchard = new Orchard(...$trees);

        $this->assertContains($trees, (array) $orchard);
    }

    public function test_add_trees()
    {
        $trees = [
            new AppleTree,
        ];

        $orchard = new Orchard(...$trees);

        $newTrees = [
            new AppleTree,
            new PearTree
        ];

        $orchard->addTrees(...$newTrees);

        $this->assertContains(array_merge($trees, $newTrees), (array) $orchard);
    }

    public function test_get_fruits()
    {
        $orchard = new Orchard(new AppleTree);

        $orchard->collectFruits();

        $fruits = $orchard->getAllFruits();

        $this->assertContainsOnlyInstancesOf(Apple::class, $fruits);
    }

    public function test_get_fruits_count()
    {
        $trees = [
            new AppleTree,
            new PearTree
        ];

        $orchard = new Orchard(...$trees);

        $orchard->collectFruits();

        $count = $orchard->getFruitsCount();

        $this->assertArrayHasKey('Apple', $count);
        $this->assertArrayHasKey('Pear', $count);
        $this->assertTrue($count['Apple'] >= 40);
        $this->assertTrue($count['Apple'] <= 50);
        $this->assertTrue($count['Pear'] >= 0);
        $this->assertTrue($count['Pear'] <= 20);
    }

    public function test_get_fruits_weight()
    {
        
        $trees = [
            new AppleTree,
            new PearTree
        ];

        $orchard = new Orchard(...$trees);

        $orchard->collectFruits();

        $count = $orchard->getFruitsWeight();

        $this->assertArrayHasKey('Apple', $count);
        $this->assertArrayHasKey('Pear', $count);
        $this->assertTrue($count['Apple'] >= 6000);
        $this->assertTrue($count['Apple'] <= 9000);
        $this->assertTrue($count['Pear'] >= 0);
        $this->assertTrue($count['Pear'] <= 3400);
    }
}