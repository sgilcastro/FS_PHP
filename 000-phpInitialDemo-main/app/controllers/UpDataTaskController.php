<?php

class UpDataTaskController extends ApplicationController
{

    public $newDato = $_POST['newDato'];
    public $posicionTarea = $_POST['posicionTarea'];   
    public $datoTarea = $_POST['datoTarea'];
    public $posicionUser = $_POST['posicionUser'];

	public function indexAction()
	{
		
	}

	public function upDataTaskAction()
	{

		$upDataTask = new UpDataTask();
		$upDataTask->upDataTask($this->posicionUser, $this->posicionTarea, $this->newDato, $this->datoTarea);
	}
	
	public function checkAction()
	{
		
	}
}