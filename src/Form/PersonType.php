<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\{TextType, NumberType, SubmitType};

class PersonType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options)
    {


        $builder
            ->add("name",TextType::class)
            ->add("max_weight",NumberType::class)
            ->add("save",SubmitType::class, array('label' =>'Creer'))
            ->getForm();
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }
}
