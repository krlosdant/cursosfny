<?php

namespace App\Controller\Ppto;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class RecursosController extends AbstractController
{
    #[Route('/ppto/recursos', name: 'app_ppto_recursos')]
    public function index(): Response
    {
        return $this->render('ppto/recursos/index.html.twig', [
            'controller_name' => 'RecursosController',
        ]);
    }
}
