<?php

namespace App\Form;

use App\Entity\GraduadoSoporte;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class GraduadoPersonalesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('apellido', null,['required' => true])
            ->add('nombre', null,['required' => true])
            ->add('documentoIdentidad', null,['required' => true])
            ->add('tipoDocumentoIdentidad', ChoiceType::class, [
                'choices'  => [
                    'DNI' => 'DNI',
                    'Pasaporte' => 'Pasaporte',
                    'Documento Extranjero' => 'Documento Extranjero',
                    'Partida de nacimiento' => 'Partida de nacimiento',
                    'Otro' => 'Otro'
                ],
            ])
            ->add('fechaNacimiento', DateType::class,[
                'widget' => 'single_text',
            ])
            ->add('telefono', null,['required' => true])
            ->add('email', EmailType::class)
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
            ->add('ciudad', null,['required' => true])
            ->add('provincia', null,['required' => true])
            ->add('calle', null,['required' => true])
            ->add('numeroCalle', null,['required' => true])
            ->add('piso')
            ->add('depto')
            ->add('Siguiente', SubmitType::class)
                
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => GraduadoSoporte::class,
        ]);
    }
}
