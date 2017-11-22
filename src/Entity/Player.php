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
 * Class Player
 * @package App\Entity
 * @ORM\Entity
 * @ORM\Table(name="players")
 */
class Player {
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
    protected $healthPoints=100;
    /**
     * @ORM\ManyToOne(targetEntity="Weapon")
     */
    protected $currentWeapon;

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
     * @return int
     */
    public function getHealthPoints(): int
    {
        return $this->healthPoints;
    }

    /**
     * @param int $healthPoints
     */
    public function setHealthPoints(int $healthPoints)
    {
        $this->healthPoints = $healthPoints;
    }

    /**
     * @return mixed
     */
    public function getCurrentWeapon()
    {
        return $this->currentWeapon;
    }

    /**
     * @param mixed $currentWeapon
     */
    public function setCurrentWeapon($currentWeapon)
    {
        $this->currentWeapon = $currentWeapon;
    }

}