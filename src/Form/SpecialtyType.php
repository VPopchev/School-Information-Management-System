<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 8.3.2018 г.
 * Time: 10:56 ч.
 */

namespace App\Form;


use App\Entity\Specialty;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SpecialtyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name',TextType::class,[
                    'attr' => ['class' => 'formInput'],
                    'label' => 'Specialty Name',
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
           'data_class' => Specialty::class
        ]);
    }
}