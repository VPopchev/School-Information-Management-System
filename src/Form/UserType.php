<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 7.3.2018 г.
 * Time: 11:07 ч.
 */

namespace App\Form;


use App\Entity\Specialty;
use App\Entity\User;
use function Sodium\add;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('first_name',TextType::class)
                ->add('last_name',TextType::class)
                ->add('email',EmailType::class)
                ->add('password',PasswordType::class)
                ->add('Register',SubmitType::class);

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class
        ]);
    }
}