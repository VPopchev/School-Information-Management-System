<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 8.3.2018 г.
 * Time: 12:10 ч.
 */

namespace App\Form;


use App\Entity\Specialty;
use App\Entity\Subject;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SubjectType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name',TextType::class,[
            'attr' => ['class' => 'formInput'],
            'label' => 'Subject Name',
            'label_attr' => ['class' => 'formLabel']
        ])
                ->add('specialty',EntityType::class,[
                    'class' => Specialty::class,
                    'choice_label' => 'name',
                    'attr' => ['class' => 'formInput'],
                    'label' => 'Specialty',
                    'label_attr' => ['class' => 'formLabel']
                ])
                ->add('Submit',SubmitType::class,[
                    'label' => 'Add',
                    'attr' => ['class' => 'formSubmit']
                ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Subject::class
        ]);
    }
}