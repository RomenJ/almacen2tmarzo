<?php

namespace App\Controller;

use App\Entity\Registrosalida;
use App\Form\RegistrosalidaType;
use App\Repository\RegistrosalidaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/registrosalida')]
class RegistrosalidaController extends AbstractController
{
    #[Route('/', name: 'app_registrosalida_index', methods: ['GET'])]
    public function index(RegistrosalidaRepository $registrosalidaRepository): Response
    {
        return $this->render('registrosalida/index.html.twig', [
            'registrosalidas' => $registrosalidaRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_registrosalida_new', methods: ['GET', 'POST'])]
    public function new(Request $request, RegistrosalidaRepository $registrosalidaRepository): Response
    {
        $registrosalida = new Registrosalida();
        $form = $this->createForm(RegistrosalidaType::class, $registrosalida);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $registrosalidaRepository->save($registrosalida, true);

            return $this->redirectToRoute('app_registrosalida_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('registrosalida/new.html.twig', [
            'registrosalida' => $registrosalida,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_registrosalida_show', methods: ['GET'])]
    public function show(Registrosalida $registrosalida): Response
    {
        return $this->render('registrosalida/show.html.twig', [
            'registrosalida' => $registrosalida,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_registrosalida_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Registrosalida $registrosalida, RegistrosalidaRepository $registrosalidaRepository): Response
    {
        $form = $this->createForm(RegistrosalidaType::class, $registrosalida);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $registrosalidaRepository->save($registrosalida, true);

            return $this->redirectToRoute('app_registrosalida_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('registrosalida/edit.html.twig', [
            'registrosalida' => $registrosalida,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_registrosalida_delete', methods: ['POST'])]
    public function delete(Request $request, Registrosalida $registrosalida, RegistrosalidaRepository $registrosalidaRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$registrosalida->getId(), $request->request->get('_token'))) {
            $registrosalidaRepository->remove($registrosalida, true);
        }

        return $this->redirectToRoute('app_registrosalida_index', [], Response::HTTP_SEE_OTHER);
    }
}
