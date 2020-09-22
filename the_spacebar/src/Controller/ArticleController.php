<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
    /**
     * Route("/")
     */
    public function homepage()
    {
        return new Response("OMG! My First page already! WOO!");
    }

    /**
     * @Route("/news/{slug}")
     * @param $slug
     * @return Response
     */
    public function show($slug)
    {
        return $this->render('article/show.html.twig', [
                'title' => ucwords(str_replace('-',' ',$slug)),
            ]);
    }

}