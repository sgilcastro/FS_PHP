<?php

class AddTaskController extends ApplicationController
{

	public $titulo;
	public $descripcion;
	public $estado;
	public $hora_inicio;
	public $hora_fin;

	public function indexAction()
	{
		
	}

	public function addTaskAction()
	{
		$this->titulo = $_POST['titulo'];
		$this->descripcion = $_POST['descripcion'];
		$this->estado = $_POST['estado'];
		$this->hora_inicio = $_POST['hora_inicio'];
		$this->hora_fin = $_POST['hora_fin'];
		
        $addTask = new AddTask();
        $addTask->addTask($this->titulo, $this->descripcion, $this->estado, $this->hora_inicio, $this->hora_fin);

	}
	
	public function checkAction()
	{
		
	}
}