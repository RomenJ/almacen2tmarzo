<?php

namespace App\Controller;

use App\Entity\Objetosalmacen;
use App\Form\ObjetosalmacenType;
use App\Repository\ObjetosalmacenRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/objetosalmacen')]
class ObjetosalmacenController extends AbstractController
{
    #[Route('/', name: 'app_objetosalmacen_index', methods: ['GET'])]
    public function index(ObjetosalmacenRepository $objetosalmacenRepository): Response
    {
        return $this->render('objetosalmacen/index.html.twig', [
            'objetosalmacens' => $objetosalmacenRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_objetosalmacen_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ObjetosalmacenRepository $objetosalmacenRepository): Response
    {
        $objetosalmacen = new Objetosalmacen();
        $form = $this->createForm(ObjetosalmacenType::class, $objetosalmacen);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $objetosalmacenRepository->save($objetosalmacen, true);

            return $this->redirectToRoute('app_objetosalmacen_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('objetosalmacen/new.html.twig', [
            'objetosalmacen' => $objetosalmacen,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_objetosalmacen_show', methods: ['GET'])]
    public function show(Objetosalmacen $objetosalmacen): Response
    {
        return $this->render('objetosalmacen/show.html.twig', [
            'objetosalmacen' => $objetosalmacen,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_objetosalmacen_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Objetosalmacen $objetosalmacen, ObjetosalmacenRepository $objetosalmacenRepository): Response
    {
        $form = $this->createForm(ObjetosalmacenType::class, $objetosalmacen);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $objetosalmacenRepository->save($objetosalmacen, true);

            return $this->redirectToRoute('app_objetosalmacen_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('objetosalmacen/edit.html.twig', [
            'objetosalmacen' => $objetosalmacen,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_objetosalmacen_delete', methods: ['POST'])]
    public function delete(Request $request, Objetosalmacen $objetosalmacen, ObjetosalmacenRepository $objetosalmacenRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$objetosalmacen->getId(), $request->request->get('_token'))) {
            $objetosalmacenRepository->remove($objetosalmacen, true);
        }

        return $this->redirectToRoute('app_objetosalmacen_index', [], Response::HTTP_SEE_OTHER);
    }
}
