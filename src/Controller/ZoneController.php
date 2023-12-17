<?php

namespace App\Controller;

use App\Entity\Zone;
use App\Repository\ZoneRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ZoneController extends AbstractController
{
    
    private ZoneRepository $zoneRepository;

    public function __construct(ZoneRepository $zoneRepository)
    {
        $this->zoneRepository = $zoneRepository;
    }

    #[Route('/zones', name: 'zone_index')]
    public function index(): Response
    {
        $zones = $this->zoneRepository->findAll();

        return $this->render('zone/index.html.twig', [
            'zones' => $zones,
        ]);
    }
}
