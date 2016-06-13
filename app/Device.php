<?php 

namespace App;

class Device
{
	private $userAgent;
	private $device;
	private $browser;
	private $deviceLength;
	private $browserLength;
	
	public function __construct()
	{
		$this->userAgent = $_SERVER['HTTP_USER_AGENT'];
		$this->userAgent = strtolower($this->userAgent);

		$this->device = array('windows','linux','iphone','ipad','android','silk','blackberry','touch');
		$this->browser = array('firefox','chrome','opera','msie','safari');

		$this->deviceLength = count($this->device);
		$this->browserLength = count($this->browser);
	}

	public function getDevice()
	{
		for($i=0; $i < $this->deviceLength; $i++){
			if(strstr($this->userAgent, $this->device[$i])){
				return $this->device[$i];
			}
		}
	}

	public function getBrowser()
	{
		for ($i=0; $i < $this->browserLength; $i++) { 
			if(strstr($this->userAgent, $this->browser[$i])){
				return $this->browser[$i];
			}
		}
	}
}