<?php
/**
 * Created by PhpStorm.
 * User: Dependency
 * Date: 3/17/2018
 * Time: 1:39 AM
 */

class BouquetFlowers
{
    private $listFlowers;
    private $listDecorations;

    /**
     * BouquetFlowers constructor.
     * @param $listFlowers
     */

    public function __construct()
    {
        $this->listFlowers = array([15]);
        $this->listDecorations = array([15]);
    }

    public function addDecoration($nameDecoration)
    {

        $list[] = $this->getListDecorations();
        for ($i = 0; $i < 15; $i++){
            if ($i==null) {
                $list[$i] = $nameDecoration;
                break;
            }
        }
        $this->setListDecorations($list);
    }

    public function addFlower($flower){
        $list[] = $this->getListFlowers();
        for ($i = 0; $i < 15; $i++){
            if ($i==null) {
                $list[$i] = $flower;
                break;
            }
        }
        $this->setListFlowers($list);
    }

    /**
     * @return mixed
     */
    public function getListFlowers()
    {
        return $this->listFlowers;
    }

    /**
     * @param mixed $listFlowers
     */
    public function setListFlowers($listFlowers): void
    {
        $this->listFlowers = $listFlowers;
    }

    /**
     * @return mixed
     */
    public function getListDecorations()
    {
        return $this->listDecorations;
    }

    /**
     * @param mixed $listDecorations
     */
    public function setListDecorations($listDecorations): void
    {
        $this->listDecorations = $listDecorations;
    }


}