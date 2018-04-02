<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 7.3.2018 г.
 * Time: 11:26 ч.
 */

namespace App\Service;


use App\Entity\Specialty;
use App\Entity\User;
use App\Repository\RoleRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;

class UserService implements UserServiceInterface
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     * @var UserRepository
     */
    private $userRepository;

    /**
     * @var RoleRepository
     */
    private $roleRepository;

    /**
     * UserService constructor.
     * @param EntityManagerInterface $entityManager
     * @param UserRepository $userRepository
     * @param RoleRepository $roleRepository
     */
    public function __construct(EntityManagerInterface $entityManager,
                                UserRepository $userRepository,
                                RoleRepository $roleRepository)
    {
        $this->entityManager = $entityManager;
        $this->userRepository = $userRepository;
        $this->roleRepository = $roleRepository;
    }


    public function register(User $user)
    {
        $user->addRole(
            $this->roleRepository->findOneBy(['name' => 'ROLE_USER'])
        );
        $pass = password_hash($user->getPassword(),PASSWORD_BCRYPT);
        $user->setPassword($pass);
        $this->entityManager->persist($user);
        $this->entityManager->flush();
    }

    public function getAll()
    {
        return $this->userRepository->findAll();
    }

    public function getUsersBySpecialty(Specialty $specialty)
    {
        return $this->userRepository->findBy(['specialty' => $specialty]);
    }


}