<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('default/home.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    /**
     * @Route("/histoire", name="histoire")
     */
    public function histoire(): Response
    {
        return $this->render('default/histoire.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    /**
     * @Route("/produits", name="produits")
     */
    public function produit(): Response
    {
        return $this->render('default/produit.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}
