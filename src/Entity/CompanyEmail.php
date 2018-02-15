<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="companies_emails")
 * @ORM\Entity(repositoryClass="App\Repository\CompanyEmailRepository")
 */
class CompanyEmail
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Company", inversedBy="email")
     * @ORM\JoinColumn(nullable=false)
     */
    private $company;

    /**
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @ORM\Column(type="string", name="short_note", nullable=true)
     */
    private $shortNote;

    /**
     * @return mixed
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param mixed $company
     */
    public function setCompany(Company $company): void
    {
        $this->company = $company;
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

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


}
