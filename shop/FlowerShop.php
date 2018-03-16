<?php
/**
 * Created by PhpStorm.
 * User: Dependency
 * Date: 3/16/2018
 * Time: 3:34 PM
 */

require_once("C:/Users/Dependency/PhpstormProjects/flowerShop/operation/MoneyOperation.php");
class FlowerShop
{

    private $moneyOperation;

    /**
     * FlowerShop constructor.
     * @param $moneyOperation
     */
    public function __construct($moneyOperation)
    {
        $this->moneyOperation = $moneyOperation = new MoneyOperation();
    }


    public function createOperation()
    {
        $this->setMoneyOperation(new MoneyOperation);
    }

    public function addProduct(int $price)
    {
        $result = $this->getMoneyOperation();
        $result -> addToPrice($price);

        $this->setMoneyOperation($result);
    }

    public function finishBuying()
    {

        $this->getMoneyOperation()->finishOperation();
    }

    /**
     * @return MoneyOperation
     */
    public function getMoneyOperation(): MoneyOperation
    {
        return $this->moneyOperation;
    }

    /**
     * @param MoneyOperation $moneyOperation
     */
    public function setMoneyOperation(MoneyOperation $moneyOperation): void
    {
        $this->moneyOperation = $moneyOperation;
    }




}
?>