<?php

namespace App\Form;

use App\Entity\Activation;
use App\Entity\Operation;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ActivationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('objectif', TextType::class, [
                'label' => false,
                'attr'  => [
                    'class' => 'form-control',
                    'placeholder' => 'Objectif ...'
                ], 
                 
            ])
            ->add('date', null, [
                'label' => false,
                'widget' => 'single_text',
            ])

            ->add('operation', EntityType::class, [
                'label' => false,
                'class' => Operation::class,
                'choice_label' => 'nom',
                'attr'  => [
                    'class' => 'form-control',
                    'placeholder' => 'Opération ...'
                ], 
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Activation::class,
        ]);
    }
}
