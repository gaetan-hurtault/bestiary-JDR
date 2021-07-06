<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TextController extends AbstractController
{
    /**
     * @Route("/text", name="text")
     */
    public function index(): Response
    {
        return $this->render('text/index.html.twig', [
            'controller_name' => 'TextController',
        ]);
    }
}
