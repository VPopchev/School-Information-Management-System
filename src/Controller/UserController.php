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
use App\Service\RoleServiceInterface;
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
     * @var RoleServiceInterface
     */
    private $roleService;

    /**
     * UserController constructor.
     * @param UserServiceInterface $userService
     * @param RoleServiceInterface $roleService
     */
    public function __construct(UserServiceInterface $userService,
                                RoleServiceInterface $roleService)
    {
        $this->userService = $userService;
        $this->roleService = $roleService;
    }


    /**
     * @param Request $request
     * @Route("register",name="register")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function registerAction(Request $request) {
        $user = new User();
        $basicRoles = $this->roleService->getBasicRoles();
        $form = $this->createForm(UserType::class,$user,[
            'basicRoles' => $basicRoles
        ]);
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