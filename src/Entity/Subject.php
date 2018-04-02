<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SubjectRepository")
 */
class Subject
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string",name="name")
     */
    private $name;


    /**
     * @var Specialty
     * @ORM\ManyToOne(targetEntity="Specialty",inversedBy="subjects")
     * @ORM\JoinColumn(name="specialty_id",referencedColumnName="id")
     */
    private $specialty;

    /**
     * @var Mark[]|ArrayCollection
     * @ORM\OneToMany(targetEntity="App\Entity\Mark",mappedBy="subject")
     */
    private $marks;

    public function __construct()
    {
        $this->marks = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return Specialty
     */
    public function getSpecialty(): ?Specialty
    {
        return $this->specialty;
    }

    /**
     * @param Specialty $specialty
     */
    public function setSpecialty(Specialty $specialty): void
    {
        $this->specialty = $specialty;
    }

    /**
     * @return Mark[]|ArrayCollection
     */
    public function getMarks()
    {
        return $this->marks;
    }

    /**
     * @param $mark
     */
    public function addMark($mark): void
    {
        $this->marks[] = $mark;
    }



}
