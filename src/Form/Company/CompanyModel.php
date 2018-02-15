<?php

namespace App\Form\Company;

use Doctrine\ORM\Mapping as ORM;

class CompanyModel
{
    /**
     * @ORM\Column(type="string", nullable=true, unique=true)
     */
    private $nip;

    /**
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @ORM\Column(type="string", name="short_name", nullable=true)
     */
    private $shortName;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

//
//
//  COMPANY ADDRESS
//
//

    /**
     * @ORM\Column(type="string", name="zip_code", nullable=true)
     */
    private $zipCode;

    /**
     * @ORM\Column(type="string")
     */
    private $city;

    /**
     * @ORM\Column(type="string", name="street_address")
     */
    private $streetAddress;

    /**
     * @ORM\Column(type="string", name="short_note", nullable=true)
     */
    private $shortNote;

    /**
     * @return mixed
     */
    public function getNip()
    {
        return $this->nip;
    }

    /**
     * @param mixed $nip
     */
    public function setNip($nip): void
    {
        $this->nip = $nip;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * @param mixed $shortName
     */
    public function setShortName($shortName): void
    {
        $this->shortName = $shortName;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * @param mixed $zipCode
     */
    public function setZipCode($zipCode): void
    {
        $this->zipCode = $zipCode;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city): void
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getStreetAddress()
    {
        return $this->streetAddress;
    }

    /**
     * @param mixed $streetAddress
     */
    public function setStreetAddress($streetAddress): void
    {
        $this->streetAddress = $streetAddress;
    }

    /**
     * @return mixed
     */
    public function getShortNote()
    {
        return $this->shortNote;
    }

    /**
     * @param mixed $shortNote
     */
    public function setShortNote($shortNote): void
    {
        $this->shortNote = $shortNote;
    }



}