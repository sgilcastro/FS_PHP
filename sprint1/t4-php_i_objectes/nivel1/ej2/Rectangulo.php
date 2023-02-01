<?php
	//Clase hija
	class Rectangulo extends Shape
	{
		/*Para calcular el área de un rectángulo multiplicamos
		el largo por el ancho.*/
		public function area()
		{
			return $this->area = $this->ancho * $this->alto;
		}
	}
?>