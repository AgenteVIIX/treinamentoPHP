<?php
require_once 'functions.php';

$listChars = [
	
	'char1' => [
		'charName' => 'Khaad',
		'id_server' => 19052001,
		'gold' => 25,
		'inventary' => array('Bag of Holding', 'Staff', 'Spellbook', 'Arcane Focus')
	],
	
	'char2' => [
		'charName' => 'Leif',
		'id_server' => 41997,
		'gold' => 1500,
		'inventary' => array('Longbow', '20x arrows', 'Bracers of Archery', 'Boots of Elvenkind')
	]
];
	


$listChars['char2'] = buyItem($listChars['char2'], 'Cloak of Elvenkind', 1000);

unset($listChars['char1']);

foreach ($listChars as $char) {
    echo "Character Name: ". $char['charName'] . PHP_EOL;
    echo "Total Gold: " . $char['gold'] . PHP_EOL;

	foreach($char['inventary'] as $item=>$value) {
		echo "[" . $item+ 1 . "] " . $char['inventary'][$item] . PHP_EOL;
	}
    echo PHP_EOL;
}
