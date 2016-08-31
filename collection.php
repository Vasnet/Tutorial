<?php

//class is use for creating objects
//provide initial values for items
//implementing function(method)

class Collection implements Countable, JsonSerializable {
	protected $items = [];

	public function add($value) {
	   $this->items[] = $value;
	}

	public function set($key, $value) {
		$this->items[] = $value;
	}

	public function jsonSerialize() {
	   return json_encode  ($this->items) ;
	}
	
	public function count(){
		return count ($this->items)  ;
	}
}
