<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProstageController extends AbstractController
{

    public function index(): Response
    {
        return $this->render('prostage/index.html.twig', [
            'controller_name' => 'ProstageController',
        ]);
    }

    public function entreprises(): Response
    {
        return $this->render('prostage/entreprises.html.twig', [
            'controller_name' => 'ProstageController',
        ]);
    }

    public function formations(): Response
    {
        return $this->render('prostage/formations.html.twig', [
            'controller_name' => 'ProstageController',
        ]);
    }

    public function stages($id): Response
    {
        return $this->render('prostage/stages.html.twig', [
            'id_stage' => $id, 
        ]);
    }
}