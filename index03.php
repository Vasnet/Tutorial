<?php

require 'Collection.php';

$c = new Collection();

$c->add('foo');
$c->add('bar');

echo json_encode($c);