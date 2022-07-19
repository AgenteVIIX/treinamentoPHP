<?php
namespace root\InventaryManager\Model\Itens; 

class Armor extends Item {
    private int $acBonus;
    private string $armorType;
    private int $strRequisite;

    public function __construct(string $name, string $description, float $weight, string $rarity, string $type, int $acBonus, string $armorType, int $strRequisite) {
        parent::__construct($name, $description, $weight, $rarity, $type);
        $this->acBonus = $acBonus;
        $this->armorType = $armorType;
        $this->strRequisite = $strRequisite;
    }  
}