<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;




class HomepageController extends AbstractController
{
    /**
     * @Route("/homepage", name="homepage")
     */
    public function index(Request $request)
    {
        $tournaments = [
             ['name'=>'Tournament 1'],
             ['name'=>'Tournament 2'],
            ['name'=>'Tournament 3'],
        ];
        // TODO: Implement __invoke() method.
//        return new Response("Welcome to your new controller !") ;
        return $this->render('homepage.html.twig',
            ['tournaments' => $tournaments,'message'=>$request->query->get('message', 'Pas de message')]);
    }
}
