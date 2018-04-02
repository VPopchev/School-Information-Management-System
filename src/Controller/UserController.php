<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 7.3.2018 г.
 * Time: 11:18 ч.
 */

namespace App\Controller;


use App\Entity\User;
use App\Form\UserType;
use App\Service\UserServiceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends Controller
{

    /**
     * @var UserServiceInterface
     */
    private $userService;

    /**
     * UserController constructor.
     * @param UserServiceInterface $userService
     */
    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }


    /**
     * @param Request $request
     * @Route("register",name="register")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function registerAction(Request $request) {
        $user = new User();
        $form = $this->createForm(UserType::class,$user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $this->userService->register($user);
            return $this->redirectToRoute('homepage');
        }
        return $this->render('User/register.html.twig',[
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("user/all",name="all_users")
     */
    public function allStudentsAction(){
        /** @var User[] $users */
        $users = $this->userService->getAll();
        return $this->render('User/all.html.twig',[
            'users' => $users
        ]);
    }

    /**
     * @Route("user/profile/{id}",name="user_profile")
     */
    public function profileAction(User $user){
        return $this->render('User/profile.html.twig',[
            'user' => $user
        ]);
    }

    /**
     * @param User $user
     * @Route("user/studentProfile/{id}",name="student_profile")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function studentProfileAction(User $user){
        return $this->render('User/studentProfile.html.twig',[
            'student' => $user
        ]);
    }
}