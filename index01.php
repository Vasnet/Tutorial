<?php

require 'Bird.php';
require 'pigeon.php';
require 'pengiun.php';

$penguin = new Penguin(false, 2);

$penguin->foo();

if ($penguin->canFly()) {
	//can fly
}