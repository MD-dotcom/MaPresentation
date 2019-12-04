<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MoiController extends AbstractController
{
    /**
     * @Route("/moi", name="moi")
     */
    public function index()
    {
        return $this->render('moi/index.html.twig', [
            'controller_name' => 'MoiController',
        ]);
    }
}
