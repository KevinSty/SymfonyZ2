<?php

/**
 * Created by PhpStorm.
 * User: kevin.diaz
 * Date: 22/11/17
 * Time: 10:40
 */
namespace App\Fight;

use App\Entity\Fight;
use App\Entity\Weapon;

class DamageCalculator {

    public function calculate(Weapon $weapon, $damage) {
        $damage = $weapon->getDamage() - ($weapon->getDamageDistanceCoef());
        if ($damage <0) {
            return 0;
        }
        return round($damage);
    }

    public function handle(Fight $fight){
        $weapon = $fight->player->getCurrentWeapon();
    }
}