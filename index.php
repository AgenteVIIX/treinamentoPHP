<?php

namespace root\InventaryManager;

require_once 'autoload.php';

use root\InventaryManager\Model\Itens\Weapon;
use root\InventaryManager\Model\Itens\Item;
use root\InventaryManager\Model\Itens\Armor;
use root\InventaryManager\Model\Classes\Character;
use root\InventaryManager\Model\Classes\Classe;
use root\InventaryManager\Model\Classes\Rogue;
use root\InventaryManager\Services\InventaryController;


//string $name, string $description, float $weight, string $rarity, string $type, array $damageDice, int $bonus
//creating an array of itens
$daggerOfTheHemomancer = new Weapon('Dagger of the Hemomancer', 'A dagger forged to drain blood from his targets', 0.5, 'Very Rare', 'Weapon', array(1, 4), 2);
$cloakOfNight = new Item('Cloak of the Night', 'A black and blue Cloak capable of turn the user invisible in full moon nights', 1.0, 'Very Rare', 'Woundrous');
$amuletOfTheWarMage = new Item('Amulet of the War Mage', 'A amulet capable of casting simple cantrips of the wizard spell list', 0, 'Rare', 'Woundrous');
$dagger1 = new Weapon('Dagger +1', 'A beutiful dagger made of a black metal, a common reward in the Guild of the Ravens', 0.5, 'Incommon', 'Weapon', array(1,4), 1);
$gaspardInventary = [$daggerOfTheHemomancer, $cloakOfNight, $amuletOfTheWarMage, $dagger1];

//creating a character
$gaspard = new Character('Gaspard Ravenclaw', $gaspardInventary, new Rogue());

//creating a new Item
$silverLycanChime = new Item('Silver Lycan Chime', 'A wolf format amulet who can detect shapeshifters', 0.2, 'Incommon', 'Woundrous');

$controller = new InventaryController();
$controller->addItem($gaspard->getInventary(), $gaspard,  $silverLycanChime);
$controller->showInventary($gaspard);
//$controller->removeItem($gaspard, 'Silver Lycan Chime');

//priting some infos of a character
echo $gaspard->getName() . ' - ' . $gaspard->getClass()
?>

