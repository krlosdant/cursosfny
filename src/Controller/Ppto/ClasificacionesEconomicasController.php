<?php

namespace App\Controller\Ppto;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ClasificacionesEconomicasController extends AbstractController
{
    #[Route('/ppto/clasificaciones/economicas', name: 'app_ppto_clasificaciones_economicas')]
    public function index(): Response
    {
        return $this->render('ppto/clasificaciones_economicas/index.html.twig', [
            'controller_name' => 'ClasificacionesEconomicasController',
        ]);
    }
}
