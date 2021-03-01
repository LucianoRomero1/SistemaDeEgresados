<?php

namespace App\Form;

use App\Entity\Egresado;
use App\Entity\EgresadoSoporte;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DatosAdministrativosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nroResolucionME', null,['required' => true])
            ->add('nroExpediente', null,['required' => true])
            ->add('nroResolucionRectoral', null,['required' => true])
            ->add('nroDiploma', null,['required' => true])
            ->add('nroAnalitico', null,['required' => true])
            ->add('nroRevalida', null,['required' => true])
            ->add('fechaEntrega', DateType::class, [
                'widget' => 'single_text'
            ])
            ->add('Aceptar', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => EgresadoSoporte::class,
        ]);
    }
}
