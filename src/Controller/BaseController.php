<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\CafeType;
use App\Form\TextType;



class BaseController extends AbstractController
{
    #[Route('/accueil', name: 'app_accueil')]
    public function index(): Response
    {
        return $this->render('base/index.html.twig', []);
    }

    #[Route('/ajoutcafe', name: 'app_ajoutCafe')]
    public function ajoutCafe(): Response
    {
        $form = $this->createForm(CafeType::class);
        return $this->render('base/ajoutCafe.html.twig', [
            'form' => $form->createView()

        ]);
    }
}
