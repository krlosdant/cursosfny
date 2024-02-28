<?php

namespace App\Controller\Ppto;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
//#[Route('/ppto', name: 'app_ppto_')]
class ErogacionesController extends AbstractController
{
    #[Route('/erogaciones', name: 'app_erogaciones')]
    public function index(): Response
    {
        return $this->render('ppto/erogaciones/index.html.twig', [
            'controller_name' => 'ErogacionesController',
        ]);
    }
}
