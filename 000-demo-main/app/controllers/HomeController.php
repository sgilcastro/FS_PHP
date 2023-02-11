<?php

class HomeController extends ApplicationController
{
	public function homeAction()
	{
		
	}
	
	public function checkAction()
	{
		$this->view->message =  "hello from test::check";
	}
}