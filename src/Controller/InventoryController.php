<?php

/**
 * Created by PhpStorm.
 * User: kevin.diaz
 * Date: 13/11/17
 * Time: 14:17
 */
namespace App\Controller;


use App\Form\PersonType;
use App\Form\MaterialType;
use App\Calculate\InventoryCalc;
use App\Entity\Inventory;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\{SubmitType, TextType, DateType, IntegerType, NumberType, CheckboxType};
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class InventoryController extends Controller {

    public function newi(Request $request) {

        $inventory = new Inventory();
        $inventory->setNbr(0);
        $form = $this->createFormBuilder($inventory)
            ->add("person")
            ->add("material")
            ->add("nbr",IntegerType::class)
            ->add("save",SubmitType::class, array('label' =>'Creer'))
            ->getForm();

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){

            $inv = new InventoryCalc();
            $em = $this->getDoctrine()->getManager();
            $em-> persist($inventory);
            $em-> flush();
        }

        return $this->render("Inventory/newInventory.html.twig", array('form' => $form->createView(),));
    }

    public function newGetPostAction(Request $request){
        $inventory = new Inventory;
        $form = $this->createForm(EntityType::class, $inventory);
        $form->handleRequest($request);

    }
    public function index() {
        return $this->render("Inventory/Inventoryindex.html.twig");
    }
}