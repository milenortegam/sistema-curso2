<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Dashboard2Controller extends AbstractController
{
    /**
     * @Route("/dashboard2", name="app_dashboard2")
     */
    public function index(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        return $this->render('dashboard2/index.html.twig', [
            'controller_name' => 'Dashboard2Controller',
        ]);
    }
}
