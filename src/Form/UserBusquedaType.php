<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class UserBusquedaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('buscar',TextType::class,array("required"=>false))

        //Como momentaneamente no importa el filtro de busqueda, lo saco
        // ->add('filtrarPor', ChoiceType::class, ['choices' =>[
        //     'Apellido' => 1,
        //     'Dni' => 2,
        //     'Todos' => 3
            
        // ]])
        ->add('Buscar',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            
        ]);
    }
}
