<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="playeritem")
 */
class PlayerItem {
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @Assert\NotBlank()
     * @ORM\ManyToOne(targetEntity="Player", inversedBy="playeritems")
     * @@ORM\JoinColumn(name="player_id", referencedColumnName="id")
     */
    private $player;

    /**
     * @Assert\NotBlank()
     * @ORM\ManyToOne(targetEntity="Item")
     * @@ORM\JoinColumn(name="item_id", referencedColumnName="id")
     */
    private $item;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * @param mixed $player
     */
    public function setPerson($player) {
        $this->person = $player;
    }

    /**
     * @return mixed
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param mixed $item
     */
    public function setMaterial($item)
    {
        $this->item = $item;
    }

    public function __construct() {
        $this = new \DateTime();
    }
}