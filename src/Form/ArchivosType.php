<?php

namespace App\Form;

use App\Entity\Egresado;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use App\Entity\EgresadoSoporte;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ArchivosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('archivosArray', FileType::class, ['required' => false, 'multiple'=>true])
            ->add('pdfAnalitico', FileType::class, ['required' => false, 'multiple'=>false, 'data_class' => null])
            ->add('CargarEgresado', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => EgresadoSoporte::class,
        ]);
    }
}
