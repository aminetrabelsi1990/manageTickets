<?php

namespace App\Form;

use App\Entity\Task;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Component\Translation\TranslatorInterface;

class TaskType extends AbstractType
{

    protected $translator;

    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('status', ChoiceType::class, ['choices' => [
                $this->translator->trans('rough draft') => 'rough draft',
                $this->translator->trans('waiting') => 'waiting',
                $this->translator->trans('in progress') => 'in progress',
                $this->translator->trans('in validation') => 'in validation', 
                $this->translator->trans('finished') => 'finished',
                $this->translator->trans('archived') => 'archived' 
            ]])
            ->add('assigned', EntityType::class, [
                'class' => User::class,
                'query_builder' => function (UserRepository $er) use ($options) {
                    return $er->createQueryBuilder('u')
                            ->leftJoin('u.projects', 'p')
                            ->andWhere('p.id = :project')
                            ->setParameter('project', $options['project']);
                    ;
                }
            ]) 
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Task::class, 
            'project' => null       
        ]);
    }

}
