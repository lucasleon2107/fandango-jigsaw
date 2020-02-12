<?php


namespace App;


class BackstagePassItem extends Item
{
    public function updateValues()
    {
        if ($this->sellIn <= 0) {
            $this->quality = 0;
        } else {
            $this->increaseQuality($this->getQualityIncreaseSpeed($this->sellIn));
        }

        $this->decreaseSellIn();
    }

    private function getQualityIncreaseSpeed($sellIn)
    {
        switch ($sellIn) {
            case $sellIn <= 5:
                return 3;

            case $sellIn <= 10:
                return 2;

            default:
                return 1;
        }
    }
}