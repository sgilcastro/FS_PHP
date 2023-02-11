<?php

class LoginController extends ApplicationController
{

	public function indexAction()
	{

		
	}
		
	public function errorAction()
	{
		
	}


	
	public function loginAction()
	{
		
		$objet1 = new Login();
		$objet1->loginAction();
		
	}
	
	public function checkAction()
	{
		echo "estas en login check";
	}

	
}