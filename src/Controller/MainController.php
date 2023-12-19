<?php

// MainController.php

namespace App\Controller;

use App\Repository\ZoneRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(ZoneRepository $zoneRepository): Response
    {
        $zones = $zoneRepository->findBy([], ['position' => 'ASC']);

        return $this->render('main/index.html.twig', [
            'zones' => $zones,
        ]);
    }
}
