<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 8.3.2018 г.
 * Time: 12:23 ч.
 */

namespace App\Service;


use App\Entity\Subject;
use App\Repository\SubjectRepository;
use Doctrine\ORM\EntityManagerInterface;

class SubjectService implements SubjectServiceInterface
{

    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     * @var SubjectRepository
     */
    private $subjectRepository;

    /**
     * SubjectService constructor.
     * @param EntityManagerInterface $entityManager
     * @param SubjectRepository $subjectRepository
     */
    public function __construct(EntityManagerInterface $entityManager,
                                SubjectRepository $subjectRepository)
    {
        $this->entityManager = $entityManager;
        $this->subjectRepository = $subjectRepository;
    }


    public function add(Subject $subject)
    {
        $this->entityManager->persist($subject);
        $this->entityManager->flush();
    }
}