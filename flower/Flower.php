<?php
/**
 * Created by PhpStorm.
 * User: Dependency
 * Date: 3/16/2018
 * Time: 10:04 PM
 */

abstract class Flower{
    protected $name;
    protected $color;
    public function __construct($name, $color)
    {
        $this->name= $name;
        $this->color=$color;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }
}
class Rose extends Flower{}
class Romashka extends Flower{}
