<?php

namespace App\Controller\Companies;

use App\Entity\Company;
use App\Form\Company\CompanyAddressType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AddressesController extends AbstractController
{
    /**
     * @Route("/companies/{id}/address/create", name="companies.address.create", methods={"GET", "POST"})
     */
    public function create(Company $company, Request $request)
    {
        $form = $this->createForm(CompanyAddressType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $addressForm = $form->getData();
            $addressForm->setCompany($company);

            $em = $this->getDoctrine()->getManager();
            $em->persist($addressForm);
            $em->flush();

            return $this->redirectToRoute('companies.show', ['id' => $company->getId()]);
        }

        return $this->render('companies/addresses/create.html.twig', [
            'addressForm' => $form->createView(),
            'company' => $company,
        ]);
    }
}
