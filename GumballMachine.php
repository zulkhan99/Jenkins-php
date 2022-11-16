<?php

class GumballMachine {

	private $gumballs;
	
	public function turnWheel() {
  	$this->setGumballs($this->getGumballs()-2);
	}
	
	public function setGumballs($amount) {
		$this->gumballs = $amount;
	}
	
	public function turnWheel() {
		$this->setGumballs($this->getGumballs()-1);
	}
}
