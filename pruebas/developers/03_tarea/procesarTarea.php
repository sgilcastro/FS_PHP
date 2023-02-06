
<?php   
    include("Signup.php");

    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $estado = $_POST['estado'];
    $hora_inicio = $_POST['hora_inicio'];
    $hora_fin = $_POST['hora_fin'];

    echo '<br>Título: '.$titulo.
    '<br>Descripción: '.$descripcion.
    '<br>Estado: '.$estado.
    '<br>Hora de inicio: '.$hora_inicio.
    '<br>Hora de fin: '.$hora_fin.
    '<br>';
    



    $consultarDb = new ConsultarDb;

    print_r($signup->consultar("sgil"));
    

    $tarea = new Tarea();
    
    print_r($tarea->addTarea($titulo, $descripcion, $estado, $hora_inicio, $hora_fin));

?>