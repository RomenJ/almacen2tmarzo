<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ObjetosalmacenRepository;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(ObjetosalmacenRepository $objetoRepo): Response
    {
        
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'objetosalmacens'=>$objetoRepo->findAll()
        ]);
    }
}
