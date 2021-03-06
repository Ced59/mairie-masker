<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfilController extends AbstractController
{
    /**
     * @Route("/profil", name="profil")
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('profil/index.html.twig', [
            'titleProfil' => 'Votre Profil'
        ]);
    }

}
