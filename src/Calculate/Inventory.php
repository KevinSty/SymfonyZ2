<?php

/**
 * Created by PhpStorm.
 * User: kevin.diaz
 * Date: 20/11/17
 * Time: 15:56
 */
namespace App\Calculate;

class InventoryCalc {

    private $entityManager;
    private $person;
    private $inventory;

    /**
     * Inventory constructor.
     * @param \Doctrine\Orm\EntityManager $em
     */
    public function __construct(\Doctrine\Orm\EntityManager $em) {
        $this->entityManager = $em;
    }

    public function calcul() {

        $max = 0;
        foreach($this->inventory as $inv){
            $max = $this->getPerson()->getMaxWeight();
            if($max > $this->getInventory()->getWeight() * $this->getInventory()->getnbr()){
                return true;
            } else {
                return false;
            }
        }
    }
    /**
     * @return \Doctrine\Orm\EntityManager
     */
    public function getEntityManager(): \Doctrine\Orm\EntityManager
    {
        return $this->EntityManager;
    }

    /**
     * @param \Doctrine\Orm\EntityManager $EntityManager
     */
    public function setEntityManager(\Doctrine\Orm\EntityManager $EntityManager)
    {
        $this->EntityManager = $EntityManager;
    }

    /**
     * @return mixed
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * @param mixed $person
     */
    public function setPerson($person)
    {
        $this->person = $person;
    }

    /**
     * @return mixed
     */
    public function getInventory()
    {
        return $this->inventory;
    }

    /**
     * @param mixed $inventory
     */
    public function setInventory($inventory)
    {
        $this->inventory = $inventory;
    }


}