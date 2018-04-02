<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 7.3.2018 г.
 * Time: 10:32 ч.
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends Controller
{
    /**
     * @Route("index",name="homepage")
     */
    public function indexAction(){
        $message = 'You a bitch!';
        return $this->render('index.html.twig',[
            'msg' => $message
        ]);
    }
}