<?php

namespace App\Form;

use App\Entity\Goodies;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class GoodiesEditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nom', TextType::class, [
                'label' => false,
                'attr'  => [
                    'class' => 'form-control',
                    'placeholder' => 'Nom Goodies ...'
                ], 
                 
            ])
            ->add('Quantity', TextType::class, [
                'label' => false,
                'attr'  => [
                    'class' => 'form-control',
                    'placeholder' => 'Nom Goodies ...'
                ], 
                 
            ])
            ->add(
                'Image',
                FileType::class,
                [
                    'attr' => ['class' => 'form-control'],
                    'label' => 'Image de couverture',
                    'required' => true,
                    'multiple' => false,
                    'constraints' => [
                        new File([
                            'maxSize' => '1024k',
                            'mimeTypes' => [
                                'image/*',
                            ],
                            'mimeTypesMessage' => 'Please upload a valid image',
                        ])
                    ],
                    'data_class' => null,
                ]
            )
            ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Goodies::class,
        ]);
    }
}
