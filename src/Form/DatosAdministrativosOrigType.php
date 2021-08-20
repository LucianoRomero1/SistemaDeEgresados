<?php

namespace App\Form;

use App\Entity\Egresado;
use App\Entity\EgresadoSoporte;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DatosAdministrativosOrigType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //Les tuve que poner required true a todos porque sino no me los tomaba por defecto , idk why
            ->add('nombreRector', null,['required' => true])
            ->add('apellidoRector', null,['required' => true])
            ->add('nombreSecretario', null,['required' => true])
            ->add('apellidoSecretario', null,['required' => true])
            ->add('nroResolucionAprob', null,['required' => true])
            ->add('nroResolucionME', null,['required' => true])
            ->add('nroExpediente', null,['required' => true])
            ->add('nroResolucionRectoral', null,['required' => true])
            ->add('nroDiploma', null,['required' => true])
            ->add('nroAnalitico', null,['required' => true])
            ->add('nroRevalida', null,['required' => false])
            ->add('fechaEntrega', DateType::class, ['widget' => 'single_text', 'required' => false])
            ->add('Aceptar', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Egresado::class,
        ]);
    }
}
