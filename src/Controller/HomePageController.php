<?php

namespace App\Controller;

use App\Entity\Article;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomePageController extends AbstractController
{
    #[Route('/', name: 'app_home_page')]
    public function index(ManagerRegistry $doctrine): Response
    {
        return $this->render('home_page/index.html.twig', [
            'controller_name' => 'Acelys Exercice',
            'articles' => $doctrine->getRepository(Article::class)->findAll(),
        ]);
    }
}
