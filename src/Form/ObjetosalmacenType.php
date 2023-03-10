<?php

namespace App\Form;

use App\Entity\Objetosalmacen;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
class ObjetosalmacenType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('descripcion')
            ->add('cantidad')
            ->add('ubicacion', ChoiceType::class, [
                'choices'  => [
                    'Pasillo' => 'Pasillo',
                    'Estanteria' => 'Estanteria',
                    'Estante' => 'Estante',
                ],
            ])
            ->add('entradaalmacen', DateType::class)
            ->add('salidaalmacen', DateType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Objetosalmacen::class,
        ]);
    }
}
