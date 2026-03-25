<?php

namespace App\Controller;

use App\Model\Starship;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;
class StarshipApiController extends AbstractController
{
    #[Route('/api/starships')]
    public function getCollection(LoggerInterface $logger) : Response
    {
        $logger->info("Collection des vaisseux spatiaux récupérés");
        $starships = [
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

        return $this->json($starships);
    }
}
