<?php


namespace App;


class ConjuredItem extends Item
{
    public function updateValues()
    {
        $this->decreaseSellIn();
        $this->decreaseQuality(2);
    }
}