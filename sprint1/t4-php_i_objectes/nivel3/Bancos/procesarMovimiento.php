<?php

    include("AccountClass.php");

    $numCuenta = $_POST['numCuenta'];
    $nombreCliente = $_POST['nombreCliente'];
    $apellidoCliente = $_POST['apellidoCliente'];
    $amount = $_POST['amount'];
    $accion = $_POST['accion'];
    $saldo = 0;
    $saldoActualizado = 0;
    $respuesta = "";

    $cuenta1 = new AccountClass($numCuenta, $nombreCliente, $apellidoCliente);

    $saldo = $cuenta1->getSaldoActual();

    if ($accion === 'ingresar') {
        $saldoActualizado = $cuenta1->deposit($amount);
        $respuesta = 'Has ingresado '.$amount. ' € en tu cuenta '.$numCuenta. '.'; 

    } else if ($accion === 'retirar'){
          
        if (($cuenta1->getSaldoActual()- $amount)>0){
            $saldoActualizado = $cuenta1->withdraw($amount);
            $respuesta = 'Has retirado '.$amount. ' € en tu cuenta '.$numCuenta. '.'; 

        } else {
            $respuesta = 'No tienes saldo suficiente para retirar '.$amount." €.";
        }
    }
      
    echo 'Cliente: '. $cuenta1->getNombreApellido().' <br>'
    .$respuesta.' Tu saldo actual es de '.$cuenta1->getSaldoActual(). ' €.';
?>