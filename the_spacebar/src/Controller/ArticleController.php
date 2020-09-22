<?php


namespace App\Controller;


use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
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
     */
    public function show($slug)
    {
        return new Response(sprintf(
            "Future page to show the article: %s",
            $slug
        ));
    }

}