<?php
class Deck {
	public $cards;
	function __construct($cards) {
		$this->cards = $cards;
	}
	function showcards() {
		foreach($this->cards as $card) {
			echo $card->value;
	 }
  } 	
 }
?>
