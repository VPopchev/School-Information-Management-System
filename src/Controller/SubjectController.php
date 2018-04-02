<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 8.3.2018 г.
 * Time: 12:24 ч.
 */

namespace App\Controller;


use App\Entity\Subject;
use App\Form\SubjectType;
use App\Service\SubjectServiceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SubjectController extends Controller
{
    /**
     * @var SubjectServiceInterface
     */
    private $subjectService;

    /**
     * SubjectController constructor.
     * @param SubjectServiceInterface $subjectService
     */
    public function __construct(SubjectServiceInterface $subjectService)
    {
        $this->subjectService = $subjectService;
    }

    /**
     * @param Request $request
     * @Route("subject/new",name="new_subject")
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function newAction(Request $request){
        $subject = new Subject();
        $form = $this->createForm(SubjectType::class,$subject);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $this->subjectService->add($subject);
            return $this->redirectToRoute('homepage');
        }

        return $this->render('subject/new.html.twig',[
            'form' => $form->createView()
        ]);
    }

}