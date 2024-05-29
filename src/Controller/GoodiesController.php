<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class GoodiesController extends AbstractController
{
    #[Route('/goodies', name: 'app_goodies')]
    public function index(): Response
    {
        return $this->render('goodies/index.html.twig', [
            'controller_name' => 'GoodiesController',
        ]);
    }
}
