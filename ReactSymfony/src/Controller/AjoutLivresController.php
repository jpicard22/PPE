<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AjoutLivresController extends AbstractController
{
    /**
     * @Route("/ajout/livres", name="ajout_livres")
     */
    public function index(): Response
    {
        return $this->render('ajout_livres/index.html.twig', [
            'controller_name' => 'AjoutLivresController',
        ]);
    }
}
