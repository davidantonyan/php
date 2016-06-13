<?php

namespace App;

class Client
{
	private $device;
	
	function __construct()
	{
		$this->device = new Device();

		echo 'Device: '.$this->device->getDevice().'<br>';
		echo 'Browser: '.$this->device->getBrowser().'<br>';	
	}
}