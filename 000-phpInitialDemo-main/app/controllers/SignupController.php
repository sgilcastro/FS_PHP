<?php

class SignupController extends ApplicationController
{

	public $name;
    public $surname;
    public $userName;
    public $email;
    public $pw;

	public function indexAction()
	{
		
	}

	public function signupAction()
	{

		$this->name = $_POST['name'];
		$this->surname = $_POST['surname'];
		$this->userName = $_POST['userName'];
		$this->email = $_POST['email'];
		$this->pw = $_POST['pw'];


		$signup = new Signup();
		$signup->addUser($this->name, $this->surname, $this->userName, $this->email, $this->pw);
	}
	
	public function checkAction()
	{
		
	}
}