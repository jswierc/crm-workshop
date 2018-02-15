<?php

namespace App\Controller\Companies;


use App\Entity\Company;
use App\Entity\CompanyAddress;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class CompanyMaker
{

    public function create($companyForm)
    {
//        dump($companyForm);die;

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
    }
}