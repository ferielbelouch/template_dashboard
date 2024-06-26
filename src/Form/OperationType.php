<?php

namespace App\Form;

use App\Entity\Operation;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class OperationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => false,
                'attr'  => [
                    'class' => 'form-control',
                    'placeholder' => 'Nom opération ...'
                ], 
                 
            ])
            ->add('chefProjet', TextType::class, [
                'label' => false,
                'required'   => false,
                'attr'  => [
                    'class' => 'form-control',
                    'placeholder' => 'Chef de projet ...'
                ], 
                
            ])
            ->add('urlAcces', TextType::class, [
                'label' => false,
                'required'   => false,
                'attr'  => [
                    'class' => 'form-control',
                    'placeholder' => 'url ...'
                ], 
                
            ])

            ->add('statut', ChoiceType::class, [
                'label' => false,
                'required'   => false,
                'attr'  => [
                    'class' => 'form-control',
                    'placeholder' => 'url ...'
                ], 
                'choices' => [
                    'En cours' => 'enCours', // Clé => Valeur
                    'Réalisée' => 'realise',
                    'Pas commencée' => 'pasCommencee',
                    // Ajoutez d'autres choix selon vos besoins
    ]
                
            ])
            ->add('region', TextType::class, [
                'label' => false,
                'required'   => false,
                'attr'  => [
                    'class' => 'form-control',
                    'placeholder' => 'région ...'
                ], 
                
            ])
            ->add('user', EntityType::class, [
                'class' => User::class,
                'required'   => false,
                'label' => false,
                'choice_label' => 'email',
                'attr'  => [
                    'class' => 'form-control',
                    'placeholder' => 'url ...'
                ], 
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Operation::class,
        ]);
    }
}
