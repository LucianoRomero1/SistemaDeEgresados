<?php

namespace App\Form;

use App\Entity\Egresado;
use App\Entity\Carreras;
use App\Entity\Titulos;
use App\Entity\Documentos;
use App\Entity\EgresadoSoporte;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DatosAcademicosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('denominacionCarrera', EntityType::class, [
            'class' => Carreras::class,
            'choice_label' => 'nombreCarrera',
        ])
        ->add('tituloOtorgado', EntityType::class, [
            'class' => Titulos::class,
            'choice_label' => 'nombreTitulo',
        ])
        ->add('documentoEmitido', EntityType::class, [
            'class' => Documentos::class,
            'choice_label' => 'tipoDocumento',
        ])
        ->add('fechaEgreso', DateType::class, [
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