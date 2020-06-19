<?php

namespace App\Form;

use App\Entity\Pokemon;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SellForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$builder
            ->add('prix')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
		$resolver->setDefaults([
            'data_class' => Pokemon::class,
			'validation_groups' => false,
        ]);
    }
}