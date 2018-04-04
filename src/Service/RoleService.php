<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 2.4.2018 г.
 * Time: 13:15 ч.
 */

namespace App\Service;


use App\Repository\RoleRepository;
use Doctrine\ORM\EntityManagerInterface;

class RoleService implements RoleServiceInterface
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     * @var RoleRepository
     */
    private $roleRepository;

    /**
     * RoleService constructor.
     * @param EntityManagerInterface $entityManager
     * @param RoleRepository $roleRepository
     */
    public function __construct(EntityManagerInterface $entityManager,
                                RoleRepository $roleRepository)
    {
        $this->entityManager = $entityManager;
        $this->roleRepository = $roleRepository;
    }


    public function getBasicRoles()
    {
        $roles = [];

        $roles[] = $this->roleRepository->findOneBy(['name' => 'ROLE_EDITOR']);
        $roles[] = $this->roleRepository->findOneBy(['name' => 'ROLE_TEACHER']);
        $roles[] = $this->roleRepository->findOneBy(['name' => 'ROLE_STUDENT']);
        $roles[] = $this->roleRepository->findOneBy(['name' => 'ROLE_PARENT']);
        $roles[] = $this->roleRepository->findOneBy(['name' => 'ROLE_EDITOR']);

        return $roles;
    }
}