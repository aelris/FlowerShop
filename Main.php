<?php
/** то через налаштування інтерпретатора
 * на кожен новий файл нову конфігурацію((
 * ти таке хотів? Ta
 * Created by PhpStorm.
 * User: Dependency
 * Date: 3/16/2018
 * Time: 9:22 PM
 *
 * дай чекну чи воно взагалі працює
 */
require_once("shop/FlowerShop.php");
require_once("operation/MoneyOperation.php");
while (true){

    $flowerShop = new FlowerShop(new MoneyOperation());
//    $flowerShop = createOperation();

    echo "1. Add to case \n 2. Finish buying";
    switch ( fgets(STDIN, 255)){
        case 1:
                echo "Price of product";
                $flowerShop -> addProduct(fgets(STDIN, 255));
                break;
            case 2:
                $flowerShop ->finishBuying();
                $flowerShop ->createOperation();
                break;
    }

}


