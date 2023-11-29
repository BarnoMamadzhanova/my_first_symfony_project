<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route("random/{max}", name:"random_number")]
   public function number($max)
   {
       $number = random_int(0, $max);
       return $this->render('home/random.html.twig', [
           'randomNumber' => $number
       ]);
   }

    #[Route("landing", name:"landung")]
    public function landing()
    {
        return $this->render('home/landing.html.twig', [
            'name' => 'LandingController'
        ]);
    }
   
}
