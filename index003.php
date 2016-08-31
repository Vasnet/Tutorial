<?php

require 'Collection1.php';

$c = new Collection();

$c->add('foo');
$c->add('bar');

echo $c;
//echo '<pre>' . print_r($c->all(), true);