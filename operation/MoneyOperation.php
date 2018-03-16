<?php
/**
 * Created by PhpStorm.
 * User: Dependency
 * Date: 3/16/2018
 * Time: 3:40 PM
 */
require_once("C:/Users/Dependency/PhpstormProjects/flowerShop/shop/FlowerShop.php");
require_once("MoneyOperation.php");
class MoneyOperation
{
    private $totalPrice;

    /**
     * MoneyOperation constructor.
     * @param $totalPrice
     */
    public function __construct()
    {
        $this->totalPrice = 0;
    }


    public function addToPrice($price)
    {
        $sum = $this->getTotalPrice();
        $sum = $this->getTotalPrice() + $price;
        $this->setTotalPrice($sum);
    }

    public function checkTotalPrice()
    {
        return $this->getTotalPrice();
    }

    public function finishOperation(){
        $price = $this-> getTotalPrice();
        echo "До оплати ", $price;
        echo "До зустрічі";
    }

    /**
     * @return mixed
     */
    private function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * @param mixed $totalPrice
     */
    private function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;
    }
















    /**
     * @return mixed
     */
    public function getPrise()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrise($price)
    {
        $this->price = $price;
    }


}