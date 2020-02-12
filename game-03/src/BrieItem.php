<?php


namespace App;


class BrieItem extends Item
{
    public function updateValues()
    {
        $qualityIncreaseSpeed = $this->sellIn <= 0 ? 2 : 1;

        $this->decreaseSellIn();
        $this->increaseQuality($qualityIncreaseSpeed);
    }
}