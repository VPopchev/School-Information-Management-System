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

interface MarkServiceInterface
{
    public function add(Mark $mark, User $student);
}