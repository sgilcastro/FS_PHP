<?php

class CreateTaskController extends ApplicationController
{
    public $titulo = $_POST['titulo'];
    public $descripcion = $_POST['descripcion'];
    public $estado = $_POST['estado'];
    public $hora_inicio = $_POST['hora_inicio'];
    public $hora_fin = $_POST['hora_fin'];

	public function indexAction()
	{
		
	}

	public function createTaskAction()
	{

        $createTask = new CreateTask();
        $createTask->addTarea($this->titulo, $this->descripcion, $this->estado, $this->hora_inicio, $this->hora_fin);

	}
	
	public function checkAction()
	{
		
	}
}