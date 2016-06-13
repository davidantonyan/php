<?php

namespace App;

class Agent
{
	private $userAgent;
	
	function __construct()
	{
		$this->userAgent = $_SERVER['HTTP_USER_AGENT'];
		echo $this->userAgent.'<br>';
	}
}