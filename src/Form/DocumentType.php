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

class DocumentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('category', ChoiceType::class, [
               'choices' => [
                    'Contrat' => 'contrat', 
                    'Embauche' => 'embauche',
                    'Fiche de paie' => 'paie',
                   
                    ]])
            ->add('file', VichFileType::class, [
                'required' => true,
                'label' => 'Document File'
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
