<?php
/**
 * Created by PhpStorm.
 * User: Dependency
 * Date: 3/16/2018
 * Time: 3:31 PM
 */

class Shop
{
    private $location;

    /**
     * Shop constructor.
     * @param $location
     */
    public function __construct($location)
    {
        $this->location = $location;
    }


    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param mixed $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }
}