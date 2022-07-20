<?php

namespace root\InventaryManager\Services;

use root\InventaryManager\Model\Classes\Character;
use root\InventaryManager\Model\Itens\Item;

class InventaryController {

    public function showInventary(Character $char)
    {
        foreach ($char->getInventary() as $item) {
            echo $item->getName(). PHP_EOL;
        }
    }

    public function addItem(array $inventary, Character $char, Item $item): array
    {
        array_push($inventary, $item);
        $char->setInventary($inventary);
        return $char->getInventary();
    }

    /*
    public function removeItem(Character $char, Item $item)
    {
        for($i = 0; $i > count($this->inventary); $i++) {
            $comp = $strcmp($this->inventary[$i], $item); 
            if ($comp == 0) {
                unset($this->inventary[$i]);
            } else {

            } 
        }
    }
    */

}