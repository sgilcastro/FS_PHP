<?php

class UpDataUserController extends ApplicationController
{
	public $newDato = $_POST['newDato'];
	public $posicionDato = $_POST['posicionDato'];
	public $posicionUser = $_POST['posicionUser'];

	public function indexAction()
	{
		
	}

	public function upDataUserAction()
	{
		$upDataUser = new UpDataUser();
		$upDataUser->updataUser($this->posicionUser, $this->newDato, $this->posicionDato);

	}
	
	public function checkAction()
	{
		
	}
}