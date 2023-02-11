<?php

class SignupController extends ApplicationController
{
	public function indexAction()
	{
		
	}

	public function signupAction()
	{
		$signup = new Signup();
		$signup->addUser($_POST['name'], $_POST['surname'], $_POST['userName'], $_POST['email'], $_POST['pw']);
	}
	
	public function checkAction()
	{
		
	}
}