<?php


namespace App;


class ItemFactory
{
    public function getItem($name, $quality, $sellIn)
    {
        switch ($name) {
            case "Aged Brie":
                return new BrieItem($quality, $sellIn);

            case "Backstage passes to a TAFKAL80ETC concert":
                return new BackstagePassItem($quality, $sellIn);

            case "Sulfuras, Hand of Ragnaros":
                return new LegendaryItem($quality, $sellIn);

            case "Conjured Mana Cake":
                return new ConjuredItem($quality, $sellIn);

            default:
                return new NormalItem($quality, $sellIn);
        }
    }
}