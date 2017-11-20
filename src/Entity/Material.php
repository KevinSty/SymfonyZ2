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
 * Class Material
 * @package App\Material
 * @ORM\Entity
 * @ORM\Table(name="materials")
 */
class Material {
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
     * @var float
     *
     * @ORM\Column(type="float")
     */
    protected $weight;

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
     * @return string
     */
    public function getName(): string
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
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     */
    public function setWeight(float $weight)
    {
        $this->weight = $weight;
    }

    function __toString()
    {
        return $this->name;
    }


}