<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/default", name="default")
     */
    public function index(): Response
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * @Route("/default2", name="default2")
     */
    public function routeRedirect()
    {
        return $this->redirectToRoute('default-redirect');
    }

    /**
     * @Route("/redirect", name="default-redirect")
     */
    public function index3()
    {
        return $this->json(['username' => 'hey']);
    }
}
