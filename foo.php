<?php

//any class declared with "abstract" cannot be instantiated.

abstract class Foo {
	public function bar(){
		return 'foobar';
	}

abstract public function foobar();	
}