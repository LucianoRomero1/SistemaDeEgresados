<?php

namespace App\Form;

use App\Entity\Egresado;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class DatosPersonalesOrigType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('apellido')
            ->add('email', EmailType::class)
            ->add('telefono')
            ->add('fechaNacimiento', DateType::class,[
                'widget' => 'single_text',
            ])
            ->add('ciudad')
            ->add('provincia')
            ->add('nacionalidad', ChoiceType::class, [
                'choices'  => [
                    'Argentina' => 'Argentina',
                    'Brasil' => 'Brasil',
                    'Chile' => 'Chile',
                    'Colombia' => 'Colombia',
                    'Ecuador' => 'Ecuador',
                    'Uruguay' => 'Uruguay',
                ],
            ])
            ->add('dni')
            ->add('calle')
            ->add('nroDomicilio')
            ->add('piso', null,['required' => false])
            ->add('depto', null,['required' => false])
            ->add('Aceptar', SubmitType::class)
    ;
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Egresado::class,
        ]);
    }
}
