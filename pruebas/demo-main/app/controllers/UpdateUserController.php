<?php

class UpdateUserController extends ApplicationController
{
	public $newDato = $_POST['newDato'];
	public $posicionDato = $_POST['posicionDato'];
	public $posicionUser = $_POST['posicionUser'];

	public function indexAction()
	{
		
	}

	public function modifyUserAction()
	{
		$updateUser = new UpdateUser();
		$updateUser->updataUser($this->posicionUser, $this->newDato, $this->posicionDato);

	}
	
	public function checkAction()
	{
		
	}
}