<?php
use Test\Orchard\Orchard;
use Test\Orchard\Trees\AppleTree;

require_once(__DIR__.'/vendor/autoload.php');

class App
{
    static function main()
    {
        $orchard = new Orchard(new AppleTree);

        $orchard->collectFruits();

        print_r($orchard->getFruitsCount());
    }
}

App::main();

?>