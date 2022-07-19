<?php
namespace root\InventaryManager\Model\Classes;

use root\InventaryManager\Model\Itens\Item;
use root\InventaryManager\Model\Classes\Classe;

class Character
{
    private string $name;
    private array $inventary;
    private Classe $class;

    public function __construct(string $name, array $inventary, Classe $class)
    {
        $this->name = $name;
        $this->inventary = $inventary;
        $this->class = $class;
    }


    public function addItem(Item $item)
    {
        array_push($this->inventary, $item);
    }

    public function removeItem(string $item)
    {
        for($i = 0; $i > count($this->inventary); $i++) {
            $comp = $strcmp($this->inventary[$i], $item); 
            if ($comp == 0) {
                unset($this->inventary[$i]);
            } else {

            } 
        }
    }

    public function getName() {
        return $this->name;
    }

    public function getInventary() {
        return $this->inventary;
    }

    public function getClass() {
        $gettingClass = $this->class;
        $returningNameClass = $gettingClass->getName();

        return $returningNameClass;
    }

}
