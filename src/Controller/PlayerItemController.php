<?php

namespace App\Controller;


use App\Entity\PlayerItem;
use App\Form\PlayerItemType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PlayerItemController extends Controller {

    public function newPlayerItem(Request $request) {

        $playerItem = $this->get(\App\Entity\PlayerItem::class);
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(PlayerItemType::class, $playerItem);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $calculate = $this->get(\App\Calculate\Inventory::class);
            $calculate->setInventory($playerItem);
            $calculate->setPerson($playerItem->getPerson());

            if($calculate->calcul()) {
                $em->persist($playerItem);
                $em->flush();
            }
        }

        return $this->render("PlayerItem/new.html.twig", array("form"=>$form->createView()));
    }
}