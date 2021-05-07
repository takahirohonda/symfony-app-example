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
     * @Route("/default/redirect/{name}", name="default2")
     */
    public function routeRedirect($name)
    {
        return $this->redirectToRoute('default-redirect');
    }

    /**
     * @Route("/default/default-redirect/{name}", name="default-redirect")
     */
    public function index3($name)
    {
        return $this->json(['username' => $name]);
    }
}
