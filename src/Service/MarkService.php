<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 8.3.2018 г.
 * Time: 12:57 ч.
 */

namespace App\Service;


use App\Entity\Mark;
use App\Entity\User;
use App\Repository\MarkRepository;
use Doctrine\ORM\EntityManagerInterface;

class MarkService implements MarkServiceInterface
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     * @var MarkRepository
     */
    private $markRepository;

    /**
     * MarkService constructor.
     * @param EntityManagerInterface $entityManager
     * @param MarkRepository $markRepository
     */
    public function __construct(EntityManagerInterface $entityManager,
                                MarkRepository $markRepository)
    {
        $this->entityManager = $entityManager;
        $this->markRepository = $markRepository;
    }


    public function add(Mark $mark,User $user)
    {
        $mark->setUser($user);
        $this->entityManager->persist($mark);
        $this->entityManager->flush();
    }
}