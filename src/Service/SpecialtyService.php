<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 8.3.2018 г.
 * Time: 11:01 ч.
 */

namespace App\Service;


use App\Entity\Specialty;
use App\Entity\User;
use App\Repository\SpecialtyRepository;
use Doctrine\ORM\EntityManagerInterface;

class SpecialtyService implements SpecialtyServiceInterface
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     * @var SpecialtyRepository
     */
    private $specialtyRepository;

    /**
     * SpecialtyService constructor.
     * @param EntityManagerInterface $entityManager
     * @param SpecialtyRepository $specialtyRepository
     */
    public function __construct(EntityManagerInterface $entityManager,
                                SpecialtyRepository $specialtyRepository)
    {
        $this->entityManager = $entityManager;
        $this->specialtyRepository = $specialtyRepository;
    }


    public function new(Specialty $specialty)
    {
        $this->entityManager->persist($specialty);
        $this->entityManager->flush();
    }

    public function getAll()
    {
        return $this->specialtyRepository->findAll();
    }

    public function set(\stdClass $obj, User $user)
    {
        $user->setSpecialty(
            $obj->specialty
        );

        $this->entityManager->flush();
    }
}