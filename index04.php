<?php	

require 'talkInterface.php';
require 'dog.php';
require 'cat.php';

$cat = new Cat();
$dog = new Dog();

echo $dog->talk() . '<br>' . $cat->talk();