<?php
/**
 * Created by PhpStorm.
 * User: kevin.diaz
 * Date: 20/11/17
 * Time: 13:18
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Inventory
 * @package App\Intentory
 * @ORM\Entity
 * @ORM\Table(name="inventorys")
 */
class Inventory {
    /**
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;
    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    protected $nbr;
    /**
     * @var Person
     * @ORM\ManyToOne(targetEntity="Person")
     * @ORM\JoinColumn(name="person_id", referencedColumnName="id")
     */
    protected $person;
    /**
     * @var Material
     * @ORM\ManyToOne(targetEntity="Material")
     * @ORM\JoinColumn(name="material_id", referencedColumnName="id")
     */
    protected $material;

    /**
     * @return int
     */
    public function getId(): int
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
     * @return int
     */
    public function getNbr(): int
    {
        return $this->nbr;
    }

    /**
     * @param int $nbr
     */
    public function setNbr(int $nbr)
    {
        $this->nbr = $nbr;
    }

    /**
     * @return Person
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * @param Person $person
     */
    public function setPerson(Person $person)
    {
        $this->person = $person;
    }

    /**
     * @return Material
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * @param Material $material
     */
    public function setMaterial(Material $material)
    {
        $this->material = $material;
    }



}