<?php


namespace App;


class NormalItem extends Item
{
    public function updateValues()
    {
        $this->decreaseSellIn();

        $this->decreaseQuality(1);
    }
}