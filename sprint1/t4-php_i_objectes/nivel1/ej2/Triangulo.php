<?php

	//Clase hija
	class Triangulo extends Shape
	{
		/*El área o superficie de un triángulo cualquiera es igual
		al producto de la base por la altura dividido por dos.*/
		public function area()
		{
			return $this->area = ($this->ancho * $this->alto) / 2;
		}
	}

?>