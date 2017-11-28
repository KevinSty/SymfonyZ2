<?php

namespace App\Controller;


use App\Entity\Item;
use App\Form\ItemType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ItemController extends Controller {

    public function newItem(Request $request) {

        $item = $this->get(\App\Entity\Item::class);
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(ItemType::class, $item);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $em->persist($item);
            $em->flush();
        }

        return $this->render("Item/new.html.twig", array("form"=>$form->createView()));
    }
}