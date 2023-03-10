<?php

namespace App\Controller;

use App\Entity\Registroentrada;
use App\Form\RegistroentradaType;
use App\Repository\RegistroentradaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/registroentrada')]
class RegistroentradaController extends AbstractController
{
    #[Route('/', name: 'app_registroentrada_index', methods: ['GET'])]
    public function index(RegistroentradaRepository $registroentradaRepository): Response
    {
        return $this->render('registroentrada/index.html.twig', [
            'registroentradas' => $registroentradaRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_registroentrada_new', methods: ['GET', 'POST'])]
    public function new(Request $request, RegistroentradaRepository $registroentradaRepository): Response
    {
        $registroentrada = new Registroentrada();
        $form = $this->createForm(RegistroentradaType::class, $registroentrada);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $registroentradaRepository->save($registroentrada, true);

            return $this->redirectToRoute('app_registroentrada_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('registroentrada/new.html.twig', [
            'registroentrada' => $registroentrada,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_registroentrada_show', methods: ['GET'])]
    public function show(Registroentrada $registroentrada): Response
    {
        return $this->render('registroentrada/show.html.twig', [
            'registroentrada' => $registroentrada,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_registroentrada_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Registroentrada $registroentrada, RegistroentradaRepository $registroentradaRepository): Response
    {
        $form = $this->createForm(RegistroentradaType::class, $registroentrada);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $registroentradaRepository->save($registroentrada, true);

            return $this->redirectToRoute('app_registroentrada_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('registroentrada/edit.html.twig', [
            'registroentrada' => $registroentrada,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_registroentrada_delete', methods: ['POST'])]
    public function delete(Request $request, Registroentrada $registroentrada, RegistroentradaRepository $registroentradaRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$registroentrada->getId(), $request->request->get('_token'))) {
            $registroentradaRepository->remove($registroentrada, true);
        }

        return $this->redirectToRoute('app_registroentrada_index', [], Response::HTTP_SEE_OTHER);
    }
}
