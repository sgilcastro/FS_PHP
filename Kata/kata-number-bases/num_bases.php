<?php





/* Creamos la variable num y la mostramos por pantalla */
$num = 120;

echo 'El numero en decimal es: '. $num;

//Funcion para convertir a binario

function binario($num)
{
    //Array para ir almacenando los restos de dividir entre 2
	$restoNum=array(); 
	
    // Usamos bucle while para ir calculando los restos  e ir avanzando en el numm dividiendo entre dos
    //mientras el num > 0 iremos dividiendo entre 2

    while ($num > 0)
	{
        //Calculamos el numProvisional
		$numProvisional=$num/2;
        //Cálculamos el resto de dividir el num entre 2
		$resto = $num % 2;
        //Guardamos el resto que hemos obtenido en el array
		$restoNum[]=$resto;
        //Asignamos el numero entero resultante a la  variable num de nuevo*/
		$num=intval($numProvisional); 
	}

	//El array original esta alreves, hay que hacerlo inverso y bucle foreach para mostrar el valor
    rsort($restoNum); 

	foreach ($restoNum as $clave => $valor) 
	{ 
		echo $valor; /*Imprimimos el valor*/
	} 
}

/* LLamamos a la función y la mostramos por pantalla */

echo ' y en binario es: ';
$binarios=binario($num);



?>