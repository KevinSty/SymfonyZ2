<?php

namespace App\Controller;

use App\Entity\Player;
use App\Form\PlayerType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class PlayerController extends Controller {

    public function index() {
        $em = $this->getDoctrine()->getManager();
        $players = $em->getRepository(Player::class)->findAll();

        return $this->render("Player/index.html.twig", array("players"=>$players));
    }

    public function newPlayer(Request $request){

        $player = $this->get(\App\Entity\Player::class);
        $form = $this->createForm(PlayerType::class, $player);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em-> persist($player);
            $em-> flush();
        }

        return $this->render("Player/new.html.twig", array("form"=>$form->createView()));
    }
}