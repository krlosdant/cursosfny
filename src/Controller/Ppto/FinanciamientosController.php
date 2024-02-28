<?php

namespace App\Controller\Ppto;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FinanciamientosController extends AbstractController
{
    #[Route('/ppto/financiamientos', name: 'app_ppto_financiamientos')]
    public function index(): Response
    {
        return $this->render('ppto/financiamientos/index.html.twig', [
            'controller_name' => 'FinanciamientosController',
        ]);
    }
}
