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
            ->add('nombre', null,['required' => true])
            ->add('apellido', null,['required' => true])
            ->add('dni', null,['required' => true])
            ->add('tipoDocumentoIdentidad', ChoiceType::class, [
                'choices'  => [
                    'DNI' => 'DNI',
                    'Pasaporte' => 'Pasaporte',
                    'Documento Extranjero' => 'Documento Extranjero',
                    'Partida de nacimiento' => 'Partida de nacimiento',
                    'Otro' => 'Otro'
                ],
            ])
            ->add('email', EmailType::class)
            ->add('telefono', null,['required' => true])
            ->add('fechaNacimiento', DateType::class,[
                'widget' => 'single_text',
            ])
            ->add('ciudad', null,['required' => true])
            ->add('provincia', null,['required' => true])
            ->add('nacionalidad', ChoiceType::class, [
                'choices'  => [
                    'Argentina/o' => 'Argentina/o',
                    'Brasilera/o' => 'Brasilera/o',
                    'Chilena/o' => 'Chilena/o',
                    'Colombiana/o' => 'Colombiana/o',
                    'Ecuatoriana/o' => 'Ecuatoriana/o',
                    'Uruguaya/o' => 'Uruguaya/o',
                ],
            ])
            ->add('calle', null,['required' => true])
            ->add('nroDomicilio', null,['required' => true])
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
