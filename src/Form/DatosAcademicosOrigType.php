<?php

namespace App\Form;

use App\Entity\Egresado;
use App\Entity\Carreras;
use App\Entity\Titulos;
use App\Entity\Documentos;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Doctrine\ORM\EntityRepository;

class DatosAcademicosOrigType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('denominacionCarrera', EntityType::class, [
                'class' => Carreras::class,
                'choice_label' => 'nombreCarrera',
                'query_builder' => function(EntityRepository $er){
                    return $er->createQueryBuilder('nc')
                    ->orderBy('nc.nombreCarrera', "ASC");
                    
                }
            ])
            ->add('tituloOtorgado', EntityType::class, [
                'class' => Titulos::class,
                'choice_label' => 'nombreTitulo',
                'query_builder' => function(EntityRepository $er){
                    return $er->createQueryBuilder('nt')
                    ->orderBy('nt.nombreTitulo', "ASC");
                    
                }
            ])
            
            ->add('documentoEmitido', EntityType::class, [
                'class' => Documentos::class,
                'choice_label' => 'tipoDocumento',
                'query_builder' => function(EntityRepository $er){
                    return $er->createQueryBuilder('td')
                    ->orderBy('td.tipoDocumento', "ASC");
                    
                }
            ])
            ->add('originalDuplicado', ChoiceType::class, [
                'choices'  => [
                    'Original' => 'Original',
                    'Duplicado' => 'Duplicado',
                    'Otro' => 'Otro'
                ],
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
            'data_class' => Egresado::class,
        ]);
    }
}
