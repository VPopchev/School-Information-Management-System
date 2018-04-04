<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 2.4.2018 г.
 * Time: 13:29 ч.
 */

namespace App\Controller;


use App\Entity\User;
use App\Service\UserServiceInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends Controller
{
    /**
     * @var UserServiceInterface
     */
    private $userService;

    /**
     * AdminController constructor.
     * @param UserServiceInterface $userService
     */
    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }


    /**
     * @Route("admin/panel",name="admin_panel")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function adminPanelAction(){
        $unapprovedCount = count($this->userService->getUnapprovedUsers());
        return $this->render('admin/panel.html.twig',[
            'unapprovedCount' => $unapprovedCount
        ]);
    }

    /**
     * @Route("admin/approve-panel",name="approve_panel")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function approvePanelAction(){
        /** @var User[] $unapprovedUsers */
        $unapprovedUsers = $this->userService->getUnapprovedUsers();
        return $this->render('admin/unapprovedUsers.html.twig',[
            'unapprovedUsers' => $unapprovedUsers
        ]);
    }

    /**
     * @param User $user
     * @Route("admin/approve/{id}",name="approve_user")
     * @Security("has_role('ROLE_ADMIN')")
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function approveRegistrationAction(User $user){
        $this->userService->approveUserRegistration($user);
        return $this->redirectToRoute('approve_panel');
    }
}