<?php

/**
 * Created by PhpStorm.
 * User: kevin.diaz
 * Date: 13/11/17
 * Time: 14:10
 */
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Person
 * @package App\Entity
 * @ORM\Entity
 * @ORM\Table(name="persons")
 */
class Person {
    /**
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;
    /**
     * @var string
     *
     * @ORM\Column(type="string", length=20)
     */
    protected $name;
    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    protected $max_weight;

    /**
     * @var Inventory[]
     * @ORM\OneToMany(targetEntity="Inventory", mappedBy="person")
     */
    protected $person;


    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getMaxWeight(): int
    {
        return $this->max_weight;
    }

    /**
     * @param int $max_weight
     */
    public function setMaxWeight(int $max_weight)
    {
        $this->max_weight = $max_weight;
    }

    function __toString()
    {
        return $this->name;
    }

}