<?php

// MainController.php

namespace App\Controller;

use App\Repository\ZoneRepository;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(ArticleRepository $articleRepository): Response
    {
        $articles = $articleRepository->findBy([], ['id' => 'ASC']);

        return $this->render('main/index.html.twig', [
            'articles' => $articles,
        ]);
    }
}
