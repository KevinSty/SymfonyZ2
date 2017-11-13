<?php

/**
 * Created by PhpStorm.
 * User: kevin.diaz
 * Date: 13/11/17
 * Time: 14:17
 */
namespace App\Controller;


use App\Entity\Person;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\{SubmitType, TextType, DateType, IntegerType, CheckboxType};
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class PersonController extends Controller {

    public function newp(Request $request) {

        $person = new Person();
        $form = $this->createFormBuilder($person)
            ->add("name",TextType::class)
            ->add("age",IntegerType::class)
            ->add("visible",CheckboxType::class, ["required" => false])
            ->add("created_at",DateType::class)
            ->add("color",TextType::class)
            ->add("save",SubmitType::class, array('label' =>'Creer'))
            ->getForm();

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){

            $em = $this->getDoctrine()->getManager();
            $em-> persist($person);
            $em-> flush();
        }

        return $this->render("Person/new.html.twig", array('form' => $form->createView(),));
    }

    public function newGetPostAction(Request $request){
        $person = new Person;
        $form = $this->createForm(EntityType::class, $person);
        $form->handleRequest($request);

    }
    public function index() {
        return $this->render("Person/index.html.twig");
    }

}