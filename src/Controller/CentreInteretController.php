<?php

namespace App\Controller;

use App\Repository\CentreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CentreInteretController extends AbstractController
{
    /**
     * @Route("/centre/interet", name="centre_interet")
     */
    public function index(CentreRepository $repo)
    {
        $centre=$repo->findAll();
        return $this->render('centre_interet/index.html.twig', [
            'controller_name' => 'CentreInteretController',
            'centre' => $centre
        ]);
    }
}
