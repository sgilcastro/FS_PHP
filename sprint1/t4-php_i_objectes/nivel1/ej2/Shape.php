<?php
	abstract class Shape
	{
		//Atributos de clase
		protected $ancho;
		protected $alto;
		protected $area;


		public function __construct($ancho, $alto)
		{
			$this->ancho = $ancho;
			$this->alto = $alto;
		}

		abstract public function area();
	}

?>