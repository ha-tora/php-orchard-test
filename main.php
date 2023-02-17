<?php
use Test\Orchard\Orchard;
use Test\Orchard\Trees\AppleTree;
use Test\Orchard\Trees\PearTree;

require_once(__DIR__.'/vendor/autoload.php');

class App
{
    static function main()
    {
        $trees = [];

        for ($i = 0; $i < 10; $i++) array_push($trees, new AppleTree);
        for ($i = 0; $i < 15; $i++) array_push($trees, new PearTree);

        $orchard = new Orchard(...$trees);

        $orchard->collectFruits();

        print_r($orchard->getFruitsCount());
    }
}

App::main();

?>