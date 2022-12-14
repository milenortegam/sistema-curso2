<?php

namespace App\Controller;

use App\Form\CursoFormType;
use App\Entity\Curso;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;


class CreateController extends AbstractController
{
    /**
     * @Route("/create", name="app_create")
     */
    public function index(Request $request, ManagerRegistry $doctrine): Response
    {
        $form = $this->createForm(CursoFormType::class, new Curso());
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $articulo = $form->getData();
            $em = $doctrine->getManager();
            $em->persist($articulo);
            $em->flush();
            return $this->redirectToRoute('app_list');
        }

        return $this->render('create/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

}
