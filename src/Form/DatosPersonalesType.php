<?php

namespace App\Form;

use App\Entity\Egresado;
use App\Entity\EgresadoSoporte;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class DatosPersonalesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //En los choices el primero es el que se muestra en el choice y el segundo es el nombre
            //Con el cual se guarda en la DB
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
                    'Argentino/a' => 'Argentino/a',
                    'Brasilero/a' => 'Brasilero/a',
                    'Chileno/a' => 'Chileno/a',
                    'Colombiano/a' => 'Colombiano/a',
                    'Ecuatoriano/a' => 'Ecuatoriano/a',
                    'Uruguayo/a' => 'Uruguayo/a',
                ],
            ])
            ->add('calle', null,['required' => true])
            ->add('nroDomicilio', null,['required' => true])
            ->add('piso', null,['required' => false])
            ->add('depto', null,['required' => false])
            ->add('Siguiente', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        
        $resolver->setDefaults([
            'data_class' => EgresadoSoporte::class
        ]);


    }
}
