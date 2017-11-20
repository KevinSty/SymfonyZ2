<?php

/**
 * Created by PhpStorm.
 * User: kevin.diaz
 * Date: 13/11/17
 * Time: 14:17
 */
namespace App\Controller;


use App\Form\MaterialType;
use App\Entity\Material;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\{SubmitType, TextType, DateType, IntegerType, NumberType, CheckboxType};
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class MaterialController extends Controller {

    public function newm(Request $request) {

        $material = new Material();
        $material->setName("Iron");
        $material->setWeight(0);
        $form = $this->createForm(MaterialType::class,$material);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){

            $em = $this->getDoctrine()->getManager();
            $em-> persist($material);
            $em-> flush();
        }

        return $this->render("Material/newInventory.html.twig", array('form' => $form->createView(),));
    }

    public function newGetPostAction(Request $request){
        $material = new Material;
        $form = $this->createForm(EntityType::class, $material);
        $form->handleRequest($request);

    }
    public function index() {
        return $this->render("Material/Inventoryindex.html.twig");
    }
}