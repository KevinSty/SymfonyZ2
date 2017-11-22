<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\{TextType, IntegerType, SubmitType};

class PlayerType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options) {

        $builder
            ->add("name",TextType::class)
            ->add("healthPoints",IntegerType::class)
            ->add("currentWeapon")
            ->add("save",SubmitType::class, array('label' =>'Creer'))
            ->getForm();
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }
}
