<?php

class Chest {
	protected $lock;
	protected $isClosed;

	public function __construct($lock) {
	    $this->lock = $lock;
	}

	public function close($lock) {
	   if ($lock === true) {
		$this