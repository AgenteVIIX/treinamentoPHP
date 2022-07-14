<?php

function buyItem(array $char, string $nameItem, float $itemPrice): array
{
	if($itemPrice > $char['gold']) {
		echo 'You cannot buy this item' . PHP_EOL;
	} else {
		$char['gold'] -= $itemPrice;
		array_push($char['inventary'], $nameItem);
	}
	
	return $char;
}