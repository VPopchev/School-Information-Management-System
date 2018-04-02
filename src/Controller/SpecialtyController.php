<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 8.3.2018 г.
 * Time: 10:58 ч.
 */

namespace App\Controller;


use App\Entity\Specialty;
use App\Entity\User;
use App\Form\SpecialtyType;
use App\Service\SpecialtyServiceInterface;
use App\Service\UserServiceInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SpecialtyController extends Controller
{
    /**
     * @var SpecialtyServiceInterface
     */
    private $specialtyService;

    /**
     * @var UserServiceInterface
     */
    private $userService;

    /**
     * SpecialtyController constructor.
     * @param SpecialtyServiceInterface $specialtyService
     * @param UserServiceInterface $userService
     */
    public function __construct(SpecialtyServiceInterface $specialtyService,
                                UserServiceInterface $userService)
    {
        $this->specialtyService = $specialtyService;
        $this->userService = $userService;
    }


    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("specialty/new",name="new_specialty")
     */
    public function newAction(Request $request){
        $specialty = new Specialty();
        $form = $this->createForm(SpecialtyType::class,$specialty);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $this->specialtyService->new($specialty);
            return $this->redirectToRoute('homepage');
        }

        return $this->render('specialty/new.html.twig',[
            'form' => $form->createView()
        ]);

    }

    /**
     * @Route("specialty/set/{id}",name="set_specialty")
     * @param User $user
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function setAction(User $user,Request $request){
        $obj = new \stdClass();
        $obj->specialty = [];
        $form = $this->createFormBuilder($obj)
            ->add('specialty',EntityType::class,[
                'class' => Specialty::class,
                'choice_label' => 'name'
            ])
            ->add('Add',SubmitType::class)
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $this->specialtyService->set($obj,$user);
            return $this->redirectToRoute('homepage');
        }
        return $this->render('specialty/set.html.twig',[
            'form' => $form->createView(),
            'user' => $user
        ]);
    }

    /**
     * @param Specialty $specialty
     * @Route("specialty/profile/{id}",name="specialty_profile")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function profileAction(Specialty $specialty){
        /** @var User[] $specialtyStudents */
        $specialtyStudents = $this->userService
            ->getUsersBySpecialty($specialty);

        return $this->render('specialty/profile.html.twig',[
            'specialty' => $specialty,
            'students' => $specialtyStudents
        ]);
    }

    /**
     * @param Specialty $specialty
     * @Route("specialty/classBook/{id}",name="specialty_classBook")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function classBookAction(Specialty $specialty){
        return $this->render('specialty/classbook.html.twig',[
            'specialty' => $specialty
        ]);
    }
}