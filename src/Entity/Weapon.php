<?php
/**
 * Created by PhpStorm.
 * User: kevin.diaz
 * Date: 22/11/17
 * Time: 08:49
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Weapon
 * @package App\Entity
 * @ORM\Entity
 * @ORM\Table(name="weapons")
 */
class Weapon {
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
     * @ORM\Column(type="string", length=40)
     */
    protected $name;
    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    protected $damage;
    /**
     * @ORM\Column(type="decimal")
     */
    protected $damageDistanceCoef;
    /**
     * @ORM\Column(type="integer")
     */
    protected $fireRate;

    /**
     * Weapon constructor.
     * @param string $name
     * @param int $damage
     * @param $damageDistanceCoef
     * @param $fireRate
     */
    public function __construct($name, $damage, $damageDistanceCoef, $fireRate)
    {
        $this->name = $name;
        $this->damage = $damage;
        $this->damageDistanceCoef = $damageDistanceCoef;
        $this->fireRate = $fireRate;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getDamage(): int
    {
        return $this->damage;
    }

    /**
     * @return mixed
     */
    public function getDamageDistanceCoef()
    {
        return $this->damageDistanceCoef;
    }

    /**
     * @return mixed
     */
    public function getFireRate()
    {
        return $this->fireRate;
    }

}