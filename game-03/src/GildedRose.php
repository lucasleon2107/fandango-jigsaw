<?php

namespace App;

class GildedRose
{
    public $name;

    public $quality;

    public $sellIn;

    private $item;


    public function __construct($name, $quality, $sellIn)
    {
        $this->name = $name;
        $this->quality = $quality;
        $this->sellIn = $sellIn;
    }

    public static function of($name, $quality, $sellIn)
    {
        return new static($name, $quality, $sellIn);
    }

    public function tick()
    {
        $itemFactory = new ItemFactory();

        $this->item = $itemFactory->getItem($this->name, $this->quality, $this->sellIn);

        $this->item->updateValues();

        $this->quality = $this->item->quality;
        $this->sellIn = $this->item->sellIn;
    }
}
