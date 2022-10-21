<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Dashboard1Controller extends AbstractController
{
    /**
     * @Route("/dashboard1", name="app_dashboard1")
     */
    public function index(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        return $this->render('dashboard1/index.html.twig', [
            'controller_name' => 'Dashboard1Controller',
        ]);
    }
}
