<?php
/**
 * Created by PhpStorm.
 * User: Dependency
 * Date: 3/17/2018
 * Time: 1:35 AM
 */

class RealFlower extends Flower
{
    private $kind;
    private $dateCutting;

    /**
     * RealFlower constructor.
     * @param $kind
     * @param $dateCutting
     */
    public function __construct($kind, $dateCutting)
    {
        $this->kind = $kind;
        $this->dateCutting = $dateCutting;
    }


}