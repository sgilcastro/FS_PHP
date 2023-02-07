<html>
  <head>
    <title>MOdificar tarea</title>
  </head>

  <body>
    <form action="procesarModificarTarea.php" method="post">
      Posición usuario:<input name="posicionUser" type="number" min="0"><br>
      Posición tarea:<input name="posicionTarea" type="number" min="0"><br>
      Campo a modificar:<input name="datoTarea" type="text">titulo, descripcion, estado, hora_inicio, hora_fin<br>
      Nuevo texto:<input name="newDato" type="text"><br>
      <input type="submit" value="Enviar">
    </form>
  </body>

</html>





