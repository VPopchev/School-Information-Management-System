<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 8.3.2018 г.
 * Time: 12:22 ч.
 */

namespace App\Service;


use App\Entity\Subject;

interface SubjectServiceInterface
{
    public function add(Subject $subject);
}