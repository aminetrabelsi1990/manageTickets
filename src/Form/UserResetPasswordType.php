<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Validator\Constraints as Assert;

class UserResetPasswordType extends AbstractType
{
    private $translator;
    private $container;

    public function __construct(TranslatorInterface $translator, ContainerInterface $container)
    {
        $this->translator = $translator;
        $this->container = $container;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        if ($this->container->get('kernel')->getEnvironment() == "prod") {
            $builder
                ->add('password', RepeatedType::class, [
                    'type' => PasswordType::class,
                    'required' => true,
                    'constraints' => [
                        new NotBlank(),
                        new Assert\Regex([
                            'pattern' => '/(?=(?:.*[A-Z]){1,})(?=(?:.*[a-z]){1,})(?=(?:.*\d){1,})([A-Za-z0-9!@#$%^&*()\-_=+{};:,<.>]{8,})$/',
                            'message' => $this->translator->trans('Mot de passe doit contenir 8 caractères avec 1 majuscule, 1 minuscule et 1 chiffre')
                        ]),
                    ],
                ])
            ;
        } else {
            $builder
                ->add('password', RepeatedType::class, [
                    'type' => PasswordType::class,
                    'required' => true,
                    'constraints' => [
                        new NotBlank(),
                    ],
                ])
            ;
        }
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
