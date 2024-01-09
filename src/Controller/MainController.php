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
        // Récupère toutes les listes
        $listes = $listeRepository->findBy([], ['id' => 'ASC']);
        // Récupère tous les articles
        $articles = $articleRepository->findBy([], ['id' => 'ASC']);

        return $this->render('main/index.html.twig', [
            'listes' => $listes,
            'articles' => $articles,
        ]);
    }
}
