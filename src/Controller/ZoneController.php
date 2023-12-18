<?php

namespace App\Controller;

use App\Entity\Zone;
use App\Repository\ZoneRepository;
use App\Form\ZoneType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class ZoneController extends AbstractController
{
    
    private ZoneRepository $zoneRepository;

    public function __construct(ZoneRepository $zoneRepository)
    {
        $this->zoneRepository = $zoneRepository;
    }

    #[Route('/', name: 'zone_index')]
    public function index(): Response
    {
        $zones = $this->zoneRepository->findBy([], ['position' => 'ASC']);

        return $this->render('zone/index.html.twig', [
            'zones' => $zones,
        ]);
    }

    #[Route('/new', name: 'zone_new', methods: ["GET", "POST"])]
    public function new(Request $request): Response {

        $zone = new Zone();

        $form = $this->createForm(ZoneType::class, $zone);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $this->zoneRepository->save($zone, true);
            return $this->redirectToRoute('zone_index', [], Response::HTTP_SEE_OTHER);
        }
        
        return $this->render('zone/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
