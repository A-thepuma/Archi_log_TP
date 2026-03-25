<?php

namespace App\Repository;

use App\Model\Starship;
use Psr\Log\LoggerInterface;

class StarshipRepository
{

    public function __construct(private LoggerInterface $logger){

    }
    public function findAll() : array {

        $this ->logger->info("Collection des vaisseux spatiaux récupérées");
        return [
            new Starship(
                1,
                'USS LeafyCruiser (NCC-0001)',
                'Garden',
                'Jean-Luc Pickles',
                'taken over by Q',
            ),
            new Starship(
                2,
                'USS WanderLust (WCC-0002)',
                'Latte',
                'Jean-Luc snake',
                ' over by Q',
            ),

            new Starship(
                3,
                'USS Expresso (WCC-0002)',
                'aa',
                'Jean-Luc canica',
                '  by Q',
            ),
        ];
    }
}
