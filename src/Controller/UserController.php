<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/profil', name: 'profil')]
    public function index(): Response
    {
        $user_controller = 'UserController';

        return $this->render('user/index.html.twig', [
            'title' => $user_controller,
        ]);
    }
}
