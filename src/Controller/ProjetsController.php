<?php

namespace App\Controller;

use App\Repository\ProjetRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProjetsController extends AbstractController
{
    /**
     * @Route("/projets", name="projets")
     */
    public function index(ProjetRepository $repository)
    {
        $projet=$repository->findAll();
        return $this->render('projets/index.html.twig', [
            'controller_name' => 'ProjetsController',
            'projet' => $projet
        ]);
    }
}
