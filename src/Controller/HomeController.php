<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route ("/datos/{nombre}",name="datos",defaults={"nombre":"rodrigo"})
     */
    public function datos($nombre): Response{
        if ($this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY')) {
        return $this->render('security/login.html.twig');
            // Render the login form
        }else{

        return $this->render('home/datos.html.twig',compact('nombre'));
        }
    }
}
