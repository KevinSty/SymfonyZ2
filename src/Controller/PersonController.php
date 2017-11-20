<?php

/**
 * Created by PhpStorm.
 * User: kevin.diaz
 * Date: 13/11/17
 * Time: 14:17
 */
namespace App\Controller;


use App\Entity\Person;
use App\Form\PersonType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\{SubmitType, TextType, DateType, IntegerType, CheckboxType};
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class PersonController extends Controller {

    public function newp(Request $request) {

        $person = new Person();
        $person->setMaxWeight(0);
        $form = $this->createForm(PersonType::class,$person);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){

            $em = $this->getDoctrine()->getManager();
            $em-> persist($person);
            $em-> flush();
        }

        return $this->render("Person/newPerson.html.twig", array('form' => $form->createView(),));
    }

    public function newGetPostAction(Request $request){
        $person = new Person;
        $form = $this->createForm(EntityType::class, $person);
        $form->handleRequest($request);

    }
    public function index() {
        return $this->render("Person/Personindex.html.twig");
    }

}