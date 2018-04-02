<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @var string
     * @ORM\Column(type="string",name="first_name",length=50)
     */
    private $firstName;

    /**
     * @var string
     * @ORM\Column(type="string",name="last_name",length=50)
     */
    private $lastName;

    /**
     * @var string
     * @ORM\Column(type="string",name="email",unique=true)
     */
    private $email;

    /**
     * @var string
     * @ORM\Column(type="text",name="password")
     */
    private $password;

    /**
     * @var ArrayCollection
     * @ORM\ManyToMany(targetEntity="Role")
     * @ORM\JoinTable(name="user_roles",
     *     joinColumns={@ORM\JoinColumn(name="user_id",
     *     referencedColumnName="id",onDelete="CASCADE")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="role_id",referencedColumnName="id")})
     */
    private $roles;

    /**
     * @var Specialty|Null
     * @ORM\ManyToOne(targetEntity="Specialty",inversedBy="users")
     * @ORM\JoinColumn(name="specialty_id",referencedColumnName="id",nullable=true)
     */
    private $specialty;
    /**
     * @var Mark[]|ArrayCollection
     * @ORM\OneToMany(targetEntity="Mark",mappedBy="user")
     */
    private $marks;


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
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return Specialty|Null
     */
    public function getSpecialty(): ?Specialty
    {
        return $this->specialty;
    }

    /**
     * @param Specialty|Null $specialty
     */
    public function setSpecialty(?Specialty $specialty): void
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
     * @param Mark[]|ArrayCollection $marks
     */
    public function setMarks($marks): void
    {
        $this->marks = $marks;
    }


    public function getSubjectMarks(Subject $subject){
        $marks = [];
        $filteredMarks = $this->marks
            ->filter(function (Mark $mark) use ($subject){
                return $mark->getSubject() === $subject;
        });
        foreach ($filteredMarks as $mark){
            /** @var Mark $mark */
            $marks[] = number_format($mark->getValue(),2);
        }
        return implode(', ',$marks);
    }


    public function getAverageSuccess(){
        $marksCount = $this->marks->count();

        if ($marksCount === 0){
            return 0;
        }

        $marksSum = 0;
        foreach ($this->marks as $mark){
            $marksSum += $mark->getValue();
        }
        return $marksSum / $marksCount;
    }

    public function getAverageSuccessBySubject(Subject $subject){
        $filteredMarks = $this->marks
            ->filter(function (Mark $mark) use ($subject){
                return $mark->getSubject() === $subject;
            });
        $marksCount = $filteredMarks->count();

        if ($marksCount === 0){
            return 0;
        }

        $marksSum = 0;
        foreach ($filteredMarks as $mark){
            /** @var Mark $mark */
            $marksSum += $mark->getValue();
        }
        return $marksSum / $marksCount;
    }




    /**
     * Returns the roles granted to the user.
     *
     * <code>
     * public function getRoles()
     * {
     *     return array('ROLE_USER');
     * }
     * </code>
     *
     * Alternatively, the roles might be stored on a ``roles`` property,
     * and populated in any number of different ways when the user object
     * is created.
     *
     * @return array (Role|string)[] The user roles
     */
    public function getRoles()
    {
        $stringRoles = [];
        foreach ($this->roles as $role){
            /** @var Role $role */
            $stringRoles[] = $role->getRole();
        }
        return $stringRoles;
    }

    /**
     * @param Role $role
     */
    public function addRole(Role $role){
        $this->roles[] = $role;
    }

    /**
     * Returns the salt that was originally used to encode the password.
     *
     * This can return null if the password was not encoded using a salt.
     *
     * @return string|null The salt
     */
    public function getSalt()
    {
        return null;
    }

    /**
     * Returns the username used to authenticate the user.
     *
     * @return string The username
     */
    public function getUsername()
    {
        return;
    }

    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials()
    {
        return null;
    }


}
