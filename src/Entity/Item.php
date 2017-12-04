<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="item")
 */
class Item {
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(
     *      min = 4,
     *      max = 20,
     *      minMessage = "A weapon name must be at least {{ limit }} characters long",
     *      maxMessage = "A weapon name cannot be more than {{ limit }} characters"
     * )
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(
     *      min = 4,
     *      max = 20,
     *      minMessage = "A weapon type must be at least {{ limit }} characters long",
     *      maxMessage = "A weapon type cannot be more than {{ limit }} characters"
     * )
     * @ORM\Column(type="string", length=30, nullable = false)
     */
    private $typeItem;

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getTypeItem()
    {
        return $this->typeItem;
    }

    /**
     * @param mixed $typeItem
     */
    public function setTypeItem($typeItem)
    {
        $this->typeItem = $typeItem;
    }

    function __toString()
    {
        return $this->name;
    }


}