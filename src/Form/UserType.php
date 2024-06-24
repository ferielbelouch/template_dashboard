<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', TextType::class, [
                'label' => false,
                'attr'  => [
                    'class' => 'form-control',
                    'placeholder' => 'Email ...'
                ], 
                
            ])
            ->add('password', PasswordType::class, [
                'label' => false,
                'attr'  => [
                    'class' => 'form-control'
                ], 
                
            ])
            ->add('firstName', TextType::class, [
                'label' => false,
                'required'   => false,
                'attr'  => [
                    'class' => 'form-control',
                    'placeholder' => 'Prénom ...'
                ], 
                
            ])
            ->add('lastName', TextType::class, [
                'label' => false,
                'required'   => false,
                'attr'  => [
                    'class' => 'form-control',
                    'placeholder' => 'Nom ...'
                ], 
                
            ])
            ->add('roles', ChoiceType::class, [
                'choices'  => [
                    'ROLE_USER' => 'ROLE_USER',
                    'ROLE_ANIMATEUR' => 'ROLE_ANIMATEUR',
                    'ROLE_SUPERVISEUR' => 'ROLE_SUPERVISEUR',
                    'ROLE_CHEF_PROJET' => 'ROLE_CHEF_PROJET',
                    'ROLE_ADMIN' => 'ROLE_ADMIN',
                ],
                'expanded' => true,
                'multiple' => true,
                'label' => 'Rôles'  
            ])
            ->add('dateBirth', null, [
                'label' => false,
                'required'   => false,
                'widget' => 'single_text',
                'attr'  => [
                    'class' => 'form-control',
                    'placeholder' => 'Date de naissance ...'
                ], 
            ])
            ->add('Phone', TextType::class, [
                'label' => false,
                'required'   => false,
                'attr'  => [
                    'class' => 'form-control',
                    'placeholder' => 'Numéro de téléphone ...'
                ], 
                
            ])
            ->add('Address', TextType::class, [
                'label' => false,
                'required'   => false,
                'attr'  => [
                    'class' => 'form-control',
                    'placeholder' => 'Votre adresse ...'
                ], 
                
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
