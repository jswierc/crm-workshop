<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="companies")
 * @ORM\Entity(repositoryClass="App\Repository\CompanyRepository")
 */
class Company
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

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

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CompanyAddress", mappedBy="company")
     */
    private $address;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CompanyEmail", mappedBy="company")
     */
    private $email;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CompanyImages", mappedBy="company")
     */
    private $image;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CompanyPhone", mappedBy="company")
     */
    private $phone;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CompanyWebsite", mappedBy="company")
     */
    private $website;

    public function __construct()
    {
        $this->address = new ArrayCollection();
        $this->email = new ArrayCollection();
        $this->image = new ArrayCollection();
        $this->phone = new ArrayCollection();
        $this->website = new ArrayCollection();
    }

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
    public function getId()
    {
        return $this->id;
    }


    /**
     * @return ArrayCollection|CompanyAddress[]
     */
    public function getAddress()
    {
        return $this->address;
    }


    /**
     * @return ArrayCollection|CompanyEmail[]
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return ArrayCollection|CompanyImages[]
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return ArrayCollection|CompanyPhone[]
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return ArrayCollection|CompanyWebsite[]
     */
    public function getWebsite()
    {
        return $this->website;
    }


}
