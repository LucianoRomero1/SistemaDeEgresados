<?php

namespace App\Form;

use App\Entity\TitulacionesAlcanzadas;
use App\Entity\Titulos;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;

class TitulacionesGraduadoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tituloOtorgado', EntityType::class, [
                'class' => Titulos::class,
                'choice_label' => 'nombreTitulo',
                'attr' => array('class' => 'form-control camposEstandar mt-3 titulacionGraduado'),
                'query_builder' => function(EntityRepository $er){
                    return $er->createQueryBuilder('nt')
                    ->orderBy('nt.nombreTitulo', "ASC");
                },
                
            ])
            ->add('nroResolucionMinisterial', TextType::class, [
                'attr' => array('class' => 'form-control camposEstandar mt-3 nroGraduado', 'placeholder' => 'Nº Resolución Ministerial'),
                
                ])
            ->add('nroResolucionUnraf', TextType::class, [
                'attr' => array('class' => 'form-control camposEstandar mt-3 nroGraduado', 'placeholder' => 'Nº Resolución UNRaf'),
                
                ])
            ->add('fechaEgreso', DateType::class,[
                'widget' => 'single_text',
                'attr' => array('class' => 'form-control camposEstandar mt-3 fechaGraduado'),
                
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TitulacionesAlcanzadas::class,
        ]);
    }
}
