<?php

namespace root\InventaryManager\Model\Itens;

class Item 
{
    protected string $name;
    protected string $description;
    protected float $weight;
    protected string $rarity;
    protected string $type;

    public function __construct(string $name, string $description, float $weight, string $rarity, string $type) {
        $this->name = $name;
        $this->description = $description;
        $this->weight = $weight;
        $this->rarity = $rarity;
        $this->type = $type;
    }

    protected function getName() {
        return $this->name;
    }
}