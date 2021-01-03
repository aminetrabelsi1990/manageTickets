<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email',null, [
                'attr' => [
                    'readonly' => 'readonly'
                ]
            ])
            ->add('firstName',null, [
                'attr' => [
                    'readonly' => 'readonly'
                ]
            ])
            ->add('lastName',null, [
                'attr' => [
                    'readonly' => 'readonly'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
