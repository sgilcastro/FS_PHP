<?php

class SignupController extends ApplicationController
{

	public $name = $_POST['name'];
    public $surname = $_POST['surname'];
    public $userName = $_POST['userName'];
    public $email = $_POST['email'];
    public $pw = $_POST['pw'];

	public function indexAction()
	{
		
	}

	public function signupAction()
	{
		$signup = new Signup();
		$signup->addUser($this->name, $this->surname, $this->userName, $this->email, $this->pw);
	}
	
	public function checkAction()
	{
		
	}
}