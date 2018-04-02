<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 8.3.2018 г.
 * Time: 12:58 ч.
 */

namespace App\Controller;


use App\Entity\Mark;
use App\Entity\User;
use App\Form\MarkType;
use App\Service\MarkServiceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MarkController extends Controller
{
    /**
     * @var MarkServiceInterface
     */
    private $markService;

    /**
     * MarkController constructor.
     * @param MarkServiceInterface $markService
     */
    public function __construct(MarkServiceInterface $markService)
    {
        $this->markService = $markService;
    }

    /**
     * @param Request $request
     * @param User $user
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @Route("mark/new/{id}",name="new_mark")
     */
    public function newAction(Request $request,User $user){
        $mark = new Mark();
        $form = $this->createForm(MarkType::class,$mark,[
            'user' => $user
        ]);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $this->markService->add($mark,$user);
            return $this->redirectToRoute('student_profile',[
                'id' => $user->getId()
            ]);
        }

        return $this->render('mark/new.html.twig',[
            'form' => $form->createView(),
            'user' => $user
        ]);
    }
}