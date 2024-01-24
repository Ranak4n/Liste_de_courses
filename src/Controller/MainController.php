<?php

// MainController.php

namespace App\Controller;

use App\Repository\ListeRepository;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(ListeRepository $listeRepository, ArticleRepository $articleRepository): Response
    {
        $listes = $listeRepository->findBy([], ['id' => 'ASC']);
        $articlesDansLePanier = $articleRepository->findBy(['panier' => true], ['id' => 'ASC']);

        return $this->render('main/index.html.twig', [
            'listes' => $listes,
            'articlesDansLePanier' => $articlesDansLePanier,
        ]);
    }

    
}
