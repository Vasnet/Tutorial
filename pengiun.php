<?php
//'public' allow users to used it outside 
//the sub-class
class Penguin extends Bird {
	public function foo() {
	   echo $this->legCount;
	}
}  