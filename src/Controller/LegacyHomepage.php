<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;


/**
 * @Route("/")
 */

class LegacyHomepage
{
    private $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }
    public function __invoke(): Response
 {
     // TODO: Implement __invoke() method.
     //return new Response("Hello Word !") ;
     return new Response(
         $this->twig->render( 'homepage.html.twig')
     );
 }
}




