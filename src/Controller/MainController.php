<?php

namespace App\Controller;

use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_main')]
    public function index(): Response
    {
        $articles = [
            new Article(1,"PC DELL","blablabal",200),
            new Article(2,"Ecran HP","blablabal",200),
            new Article(3,"Samsung s21","blablabal",200),
            new Article(4,"Iphone 14","blablabal",200),
        ];
        return $this->render('main/index.html.twig', [
            'articles' => $articles,
        ]);
    }


    #[Route('/ajax/{id}', name: 'app_ajax')]
    public function ajax($id): Response
    {
        $articles = [
            new Article(1,"PC DELL","blablabal",200),//0
            new Article(2,"Ecran HP","blablabal",200),
            new Article(3,"Samsung s21","blablabal",200),
            new Article(4,"Iphone 14","blablabal",200),
        ];

        return $this->json($articles[$id-1]);
    }



}
