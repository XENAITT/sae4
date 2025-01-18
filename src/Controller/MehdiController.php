<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MehdiController extends AbstractController
{
    /**
     * @Route("/mehdi", name="app_mehdi")
     */
    public function index(): Response
    {
        return $this->render('mehdi/index.html.twig', [
            'controller_name' => 'Mehdi',
        ]);
    }
    /**
     * @Route("/blog/home",name="app_home")
     */
    public function home() : response
    {
        return $this->render('mehdi/home.html.twig', [
            'title' => "Bienvenue",
            'age' => 21
        ]);
    }
}
