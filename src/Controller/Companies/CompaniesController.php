<?php

namespace App\Controller\Companies;


use App\Entity\Company;
use App\Entity\CompanyAddress;
use App\Form\Company\CompanyType;
use Doctrine\ORM\Mapping as ORM;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;


class CompaniesController extends AbstractController
{
    /**
     * @Route("companies", name="companies.index", methods={"GET"})
     */
    public function index()
    {
        $companies = $this->getDoctrine()
                ->getRepository(Company::class)
                ->findAll();

        return $this->render('companies/list.html.twig', [
            'companies' => $companies,
        ]);

    }


    /**
     * @Route("/companies/create", name="companies.create", methods={"GET", "POST"})
     */
    public function create(Request $request)
    {
        $form = $this->createForm(CompanyType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $companyForm = $form->getData();

            $company = new Company();
            $company->setNip($companyForm->getNip());
            $company->setName($companyForm->getName());
            $company->setShortName($companyForm->getShortName());
            $company->setDescription($companyForm->getDescription());

            $companyAddress = new CompanyAddress();
            $companyAddress->setCompany($company);
            $companyAddress->setZipCode($companyForm->getZipCode());
            $companyAddress->setCity($companyForm->getCity());
            $companyAddress->setStreetAddress($companyForm->getStreetAddress());
            $companyAddress->setShortNote($companyForm->getShortNote());

            $em = $this->getDoctrine()->getManager();
            $em->persist($companyAddress);
            $em->persist($company);
            $em->flush();


            return $this->redirectToRoute('companies.index');
        }

        return $this->render('companies/create.html.twig', [
            'companyForm' => $form->createView(),
        ]);
    }


    /**
     * @Route("/companies/{id}", name="companies.show", methods={"GET"})
     */
    public function show(Company $company)
    {

        $companyAddress = $company->getAddress()->toArray();

        return $this->render('companies/show.html.twig', [
            'company' => $company,
            'addresses' => $companyAddress,
        ]);

    }
}