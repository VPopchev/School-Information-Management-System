<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 8.3.2018 г.
 * Time: 12:46 ч.
 */

namespace App\Form;


use App\Entity\Mark;
use App\Entity\Subject;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MarkType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('value', NumberType::class, [
            'attr' => ['class' => 'formInput'],
            'label' => 'Mark Value',
            'label_attr' => ['class' => 'formLabel']
            ])
            ->add('subject', EntityType::class, [
                'class' => Subject::class,
                'choice_label' => 'name',
                'choices' => $options['user']->getSpecialty()->getSubjects(),
                'attr' => ['class' => 'formInput'],
                'label' => 'Subject',
                'label_attr' => ['class' => 'formLabel']
            ])
            ->add('Submit', SubmitType::class, [
                'label' => 'Add',
                'attr' => ['class' => 'formSubmit']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Mark::class,
            'user' => null
        ]);
    }
}