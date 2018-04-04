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
use Doctrine\Common\Collections\ArrayCollection;

interface UserServiceInterface
{
    public function register(User $user);

    public function getAll();

    public function getUsersBySpecialty(Specialty $specialty);

    public function getUnapprovedUsers();

    public function approveUserRegistration(User $user);
}