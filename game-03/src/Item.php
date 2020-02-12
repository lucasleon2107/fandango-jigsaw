<?php


namespace App;


abstract class Item
{
    public $quality;
    public $sellIn;

    /**
     * Item constructor.
     * @param $quality
     * @param $sellIn
     */
    public function __construct($quality, $sellIn)
    {
        $this->quality = $quality;
        $this->sellIn = $sellIn;
    }

    public abstract function updateValues();

    public function decreaseQuality($speed)
    {
        if ($this->sellIn <= 0) {
            $speed *= 2;
        }

        if ($this->quality > 0) {
            $this->quality -= $speed;
        }
    }

    public function increaseQuality($speed)
    {
        $this->quality += $speed;

        if ($this->quality > 50) {
            $this->quality = 50;
        }
    }

    public function decreaseSellIn()
    {
        $this->sellIn--;
    }
}