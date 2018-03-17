<?php
/**
 * Created by PhpStorm.
 * User: Dependency
 * Date: 3/17/2018
 * Time: 1:29 AM
 */

class KnittingFlowers extends Flower
{

    private $material;

    /**
     * KnittingFlowers constructor.
     * @param $material
     */
    public function __construct($material)
    {
        $this->material = $material;
    }


}