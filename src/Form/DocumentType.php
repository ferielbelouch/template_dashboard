<?php

namespace App\Form;

use App\Entity\Document;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class DocumentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => false,
                'attr'  => [
                    'class' => 'form-control',
                    'placeholder' => 'Objectif ...'
                ], 
                ])
            ->add('category', ChoiceType::class, [
               'choices' => [
                    'Contrat' => 'contrat', 
                    'Embauche' => 'embauche',
                    'Fiche de paie' => 'paie', 
               ],
               'attr'  => [
                    'class' => 'form-control',
                    'placeholder' => 'Objectif ...'
            ], 
               
               ])
            ->add('file', VichFileType::class, [
                'required' => true,
                'label' => 'Document File',
                'attr'  => [
                    'class' => 'form-control',
                    'placeholder' => 'Objectif ...'
            ], 
            ]);
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Document::class,
        ]);
    }
}
