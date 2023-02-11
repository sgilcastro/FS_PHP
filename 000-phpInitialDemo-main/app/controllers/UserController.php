<?php

class UserController extends ApplicationController
{
	public function indexAction()
	{

		$user = new UserRead;
		$this->view->_user = $user->userReadAction();

	}

	public function userModifyAction()
	{

		$id_user;
		$name = $_POST['newname'];
		$surname = $_POST['newsurname'];
		$userName = $_POST['newusername'];
		$email = $_POST['newemail'];
		$pw = $_POST['newpasword'];
		$task;


		$modify = new UserModify();
		$modify->UserModify($id_user, $name , $surname, $userName, $email, $pw, $task  );


	}

	public function deleteAction()
	{

		$delete = new UserDelete();
		$delete->Delete();

		
	}


    

}