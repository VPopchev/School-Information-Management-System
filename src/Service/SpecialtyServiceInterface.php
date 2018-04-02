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

interface SpecialtyServiceInterface
{
    public function new(Specialty $specialty);

    public function getAll();

    public function set(\stdClass $obj,User $user);
}