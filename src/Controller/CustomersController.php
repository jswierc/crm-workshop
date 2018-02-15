<?php

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CustomersController extends AbstractController
{
    /**
     * @Route("clients", name="customers.index", methods={"GET"})
     */
    public function index()
    {

        return $this->render('customers/customers.html.twig');
    }
}