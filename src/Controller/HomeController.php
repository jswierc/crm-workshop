<?php

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home.index", methods={"GET"})
     */
    public function index()
    {
        return $this->render('home/homepage.html.twig', [
            'title' => 'Homepage',
        ]);
    }
}