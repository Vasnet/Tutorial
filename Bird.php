<?php

//'protected' It allow sub-classes to access
// class

//'private' when property visibilty is set to 
//"private" only the class that is in can access them.


class Bird {
	protected $canFly;
	protected $legCount;

	public function __construct($canFly, $legCount) {
	   $this->canFly = $canFly;
  	   $this->legCount = $legCount;
	}

	public function canFly() {
	   return $this->canFly;
	}

	public function getLegCount() {
	   return $this->legCount;
	}
}