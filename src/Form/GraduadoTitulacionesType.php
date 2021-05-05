<?php

namespace App\Form;

use App\Entity\GraduadoSoporte;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class GraduadoTitulacionesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
     
            ->add('titulaciones', CollectionType::class, [
                'entry_type' => TitulacionesGraduadoType::class,
                'entry_options' => ['label' => false],
               'by_reference' =>  false,
                'allow_add'=> true,
                'allow_delete'=> true
            ])
            ->add('Cargar', SubmitType::class)

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => GraduadoSoporte::class,
        ]);
    }
}
