<?php

namespace Wow\SonataImageCropBundle\Request;

class RequestHandlerProvider
{
	private $requestHandler;

	public function setHandler($requestHandler){
		$this->requestHandler = $requestHandler;
	}
	
	public function getHandler(){
		return $this->requestHandler;
	}
}
