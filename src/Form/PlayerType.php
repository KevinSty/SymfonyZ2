<?php

namespace App\Form;

use App\Entity\Player;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Form;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class PlayerType extends AbstractType {


    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array('data_class' => Player::class));
    }

    public function buildForm(FormBuilderInterface $builder, array $options) {

        $builder
            ->add('name')
            ->addEventListener( FormEvents::PRE_SET_DATA,
                array($this, 'onPreSetData') );
    }

    public function onPreSetData(FormEvent $event) {

        $player = $event->getData();
        $form = $event->getForm();

        if ($player->getId() !== null) {
            $form->remove('name');
        }

        $form->add('submit');
    }
}