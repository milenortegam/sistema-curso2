<?php

namespace App\Controller;

use App\Entity\Curso;
use App\Repository\CursoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;

class ListController extends AbstractController
{
    /**
     * @Route("/list", name="app_list")
     */
    public function index(CursoRepository $cursoRepository): Response
    {
        return $this->render('list/index.html.twig', [
            'cursos' => $cursoRepository->findAll(),
        ]);
    }

    /**
     * @Route("/delete/{id}", name="app_delete")
     */
    public function delete(Curso $curso, ManagerRegistry $doctrine): RedirectResponse
    {
        $em = $doctrine->getManager();
        $em->remove($curso);
        $em->flush();

        return $this->redirectToRoute('app_list');
    }
}
