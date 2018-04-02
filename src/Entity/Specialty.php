<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SpecialtyRepository")
 */
class Specialty
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
     * @var Subject[]|ArrayCollection
     * @ORM\OneToMany(targetEntity="App\Entity\Subject",mappedBy="specialty")
     */
    private $subjects;

    /**
     * @var User[]|ArrayCollection
     * @ORM\OneToMany(targetEntity="User",mappedBy="specialty")
     */
    private $users;




    public function __construct()
    {
        $this->subjects = new ArrayCollection();
        $this->users = new ArrayCollection();
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
     * @return Subject[]|ArrayCollection
     */
    public function getSubjects()
    {
        return $this->subjects;
    }

    /**
     * @param Subject $subject
     */
    public function addSubject($subject): void
    {
        $this->subjects[] = $subject;
    }

    /**
     * @return User[]|ArrayCollection
     */
    public function getStudents()
    {
        return $this->users;
    }

    /**
     * @param $user
     */
    public function addStudents($user): void
    {
        $this->users[] = $user;
    }



}
