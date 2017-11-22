<?php
/**
 * Created by PhpStorm.
 * User: kevin.diaz
 * Date: 22/11/17
 * Time: 10:13
 */

namespace App\Entity;

class Fight {
    /**
     * @var player
     */
    public $player;
    /**
     * @var player
     */
    public $target;
    public $distance;
}