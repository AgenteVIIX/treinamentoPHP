<?php
namespace root\InventaryManager\Model\Classes; 

use root\InventaryManager\Model\Classes\Classe; 

class Rogue extends Classe {

    function savingThrow1() {
        return 'Dexterity';
    }

    function savingThrow2() {
        return 'Intelligence';
    }

    function getName() {
        return 'Rogue';
    }
}