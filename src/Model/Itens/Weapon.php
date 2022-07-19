<?php

namespace root\InventaryManager\Model\Itens;

use root\InventaryManager\Model\Itens\Item;

class Weapon extends Item
{
    private $damageDice;
    private $bonus;

    public function __construct(string $name, string $description, float $weight, string $rarity, string $type, array $damageDice, int $bonus) {
        parent::__construct($name, $description, $weight, $rarity, $type);
        $this->damageDice = $damageDice;
        $this->bonus = $bonus;
    }

    public function getDamageDiceQty() {
        return $this->damageDice[0];
    }

    public function getDamageDice() {
        return $this->damageDice[1];
    }

    public function getBonus() {
        return $this->bonus;
    }
}