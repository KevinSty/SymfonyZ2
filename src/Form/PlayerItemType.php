<?php
/**
 * Created by PhpStorm.
 * User: samuel.bigard
 * Date: 20/11/17
 * Time: 14:38
 */

namespace App\Form;


use App\Entity\PlayerItem;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PlayerItemType extends AbstractType {

    public function configureOptions(OptionsResolver $resolver){
        $resolver->setDefaults(array('data_class' => PlayerItem::class));
    }

    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder
            ->add("person")
            ->add("item")
            ->add("save", SubmitType::class, array("label"=>"Creer"));
    }
}