<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted as AttributeIsGranted;

/**
 * Require ROLE_ADMIN for all the actions of this controller
 */
#[AttributeIsGranted('ROLE_ADMIN')]
class ComposterController extends AbstractController
{
    #[Route('/composter', name: 'composter')]
    public function index(): Response
    {
        return $this->render('composter/index.html.twig', [
            'controller_name' => 'ComposterController',
        ]);
    }
}
